<?php

namespace App\Console\Commands;

use App\Amenity;
use App\Property;
use Illuminate\Console\Command;

class ImportPropertyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:property';

    private $dataPath = 'storage/import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import property data from json';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $importFiles = $this->getImportFiles();

        foreach ($importFiles as $importFilePath) {

            $data = json_decode(file_get_contents($importFilePath), true);

            $property = new Property;

            $property->status_id = 1;
            $property->type_id = 1;
            $property->agency_id = 1;
            $property->city_id = 1;

            $property->title = $data['propertyTitle'];
            $property->description = $data['realEstate']['descriptions']['es-ES'];
            $property->address = $data['realEstate']['location'];
            $property->latitude = $data['realEstate']['coordinates']['latitude'];
            $property->longitude = $data['realEstate']['coordinates']['longitude'];
            $property->price = $data['realEstate']['price'];
            $property->area = $data['realEstate']['features']['surface'];
            $property->rooms = $data['realEstate']['features']['rooms'];
            $property->bathrooms = $data['realEstate']['features']['bathrooms'];
            $property->photos = $this->extractPhotos($data['realEstate']['multimedia']);
            $property->car_slots = -1;

            $property->save();

            //$this->addMainAmenities($property, $data['realEstate']['featuresList']);

            $this->line("Processed: $importFilePath" );
        }
    }

    private function addMainAmenities($property, $amenities)
    {
        foreach ($amenities as $amenity) {
            $existingAmenity = Amenity::where('name', strtolower($amenity['label']))->get();
            if (!count($existingAmenity)) {
                $existingAmenity = new Amenity;
                $existingAmenity->name = strtolower($amenity['label']);
                $existingAmenity->save();
            }

            //$property->addAmenity();

            dd($existingAmenity);
        }
    }

    private function extractPhotos($photos)
    {
        $readyPhotos = [];
        foreach ($photos as $photo) {
            $readyPhotos[] = $photo['largeSizeUrl'];
        }

        return $readyPhotos;
    }

    private function getImportFiles()
    {
        $files = glob("{$this->dataPath}/*.json");
        if (!$files || count($files) == 0) {
            $this->error("There are no import files in {$this->dataPath}");
        }

        return $files;
    }
}

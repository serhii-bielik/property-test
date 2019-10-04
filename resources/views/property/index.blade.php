@extends('layout')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Best property in the Town!</h1>
        <p class="lead">Huge variety of objects. Take a look.</p>

        <div class="row">
            <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <form class="form-inline" action="/" method="POST">
                    @csrf
                    <div class="form-group">
                        <select class="custom-select">
                            <option selected="">What?</option>
                            <option value="1">FLAT</option>
                            <option value="2">HOUSE</option>
                            <option value="3">NEW_CONSTRUCTION</option>
                            <option value="4">LAND</option>
                            <option value="5">PREMISES</option>
                            <option value="6">STORAGE</option>
                            <option value="7">GARAGE</option>
                            <option value="8">NAVE</option>
                            <option value="9">BUSINESS</option>
                            <option value="10">OFFICE</option>
                            <option value="11">BUILDING</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="custom-select">
                            <option selected="">For What?</option>
                            <option value="1">RENT</option>
                            <option value="2">SELL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="custom-select">
                            <option selected="">City?</option>
                            <option value="1">Almería</option>
                            <option value="2">Cádiz</option>
                            <option value="3">Algeciras</option>
                            <option value="4">Arcos de la Frontera</option>
                            <option value="5">Cádiz</option>
                            <option value="6">Chiclana de la Frontera</option>
                            <option value="7">El Puerto de Santa María</option>
                            <option value="8">Jerez de la Frontera</option>
                            <option value="9">La Línea</option>
                            <option value="10">Puerto Real</option>
                            <option value="11">San Fernando</option>
                            <option value="12">Sanlúcar de Barrameda</option>
                            <option value="13">Córdoba</option>
                            <option value="14">Bujalance</option>
                            <option value="15">Cabra</option>
                            <option value="16">Córdoba</option>
                            <option value="17">Lucena</option>
                            <option value="18">Montilla</option>
                            <option value="19">Peñarroya-Pueblonuevo</option>
                            <option value="20">Priego de Córdoba</option>
                            <option value="21">Puente-Genil</option>
                            <option value="22">Granada</option>
                            <option value="23">Andújar</option>
                            <option value="24">Baza</option>
                            <option value="25">Granada</option>
                            <option value="26">Guadix</option>
                            <option value="27">Motril</option>
                            <option value="28">Huelva</option>
                            <option value="29">Huelva</option>
                            <option value="30">Jaén</option>
                            <option value="31">Jaén</option>
                            <option value="32">Linares</option>
                            <option value="33">Martos</option>
                            <option value="34">Úbeda</option>
                            <option value="35">Málaga</option>
                            <option value="36">Antequera</option>
                            <option value="37">Coín</option>
                            <option value="38">Málaga</option>
                            <option value="39">Melilla</option>
                            <option value="40">Ronda</option>
                            <option value="41">Sevilla</option>
                            <option value="42">Alcalá de Guadaira</option>
                            <option value="43">Carmona</option>
                            <option value="44">Dos Hermanas</option>
                            <option value="45">Ecija</option>
                            <option value="46">Lebrija</option>
                            <option value="47">Lora del Río</option>
                            <option value="48">Marchena</option>
                            <option value="49">Morón de la Frontera</option>
                            <option value="50">Osuna</option>
                            <option value="51">Sevilla</option>
                            <option value="52">Utrera</option>
                            <option value="53">Aragon</option>
                            <option value="54">Huesca</option>
                            <option value="55">Huesca</option>
                            <option value="56">Jaca</option>
                            <option value="57">Teruel</option>
                            <option value="58">Teruel</option>
                            <option value="59">Zaragoza</option>
                            <option value="60">Zaragoza</option>
                            <option value="61">Asturias</option>
                            <option value="62">Avilés</option>
                            <option value="63">Cabañaquinta</option>
                            <option value="64">Cangas de Narcea</option>
                            <option value="65">Covadonga</option>
                            <option value="66">Gijón</option>
                            <option value="67">Luarca</option>
                            <option value="68">Mieres</option>
                            <option value="69">Oviedo</option>
                            <option value="70">Pola de Siero</option>
                            <option value="71">San Martín del Rey Aurelio</option>
                            <option value="72">Tineo</option>
                            <option value="73">Villaviciosa</option>
                            <option value="74">Balearic Islands</option>
                            <option value="75">Palma</option>
                            <option value="76">Maó</option>
                            <option value="77">Basque Country</option>
                            <option value="78">Álava</option>
                            <option value="79">Vitoria-Gasteiz</option>
                            <option value="80">Guipúzcoa</option>
                            <option value="81">Donostia–San Sebastián</option>
                            <option value="82">Eibar</option>
                            <option value="83">Irun</option>
                            <option value="84">Vizcaya</option>
                            <option value="85">Barakaldo</option>
                            <option value="86">Bilbao</option>
                            <option value="87">Getxo</option>
                            <option value="88">Guernica</option>
                            <option value="89">Portugalete</option>
                            <option value="90">Santurtzi</option>
                            <option value="91">Sestao</option>
                            <option value="92">Canary Islands</option>
                            <option value="93">Las Palmas</option>
                            <option value="94">Arucas</option>
                            <option value="95">Las Palmas</option>
                            <option value="96">Telde</option>
                            <option value="97">Santa Cruz de Tenerife</option>
                            <option value="98">La Orotava</option>
                            <option value="99">Santa Cruz de Tenerife</option>
                            <option value="100">Cantabria</option>
                            <option value="101">Santander</option>
                            <option value="102">Torrelavega</option>
                            <option value="103">Castile–La Mancha</option>
                            <option value="104">Albacete</option>
                            <option value="105">Albacete</option>
                            <option value="106">Hellín</option>
                            <option value="107">Villarrobledo</option>
                            <option value="108">Ciudad Real</option>
                            <option value="109">Alcázar de San Juan</option>
                            <option value="110">Almadén</option>
                            <option value="111">Ciudad Real</option>
                            <option value="112">Puertollano</option>
                            <option value="113">Tomelloso</option>
                            <option value="114">Valdepeñas</option>
                            <option value="115">Cuenca</option>
                            <option value="116">Cuenca</option>
                            <option value="117">Guadalajara</option>
                            <option value="118">Guadalajara</option>
                            <option value="119">Toledo</option>
                            <option value="120">Talavera de la Reina</option>
                            <option value="121">Toledo</option>
                            <option value="122">Castile–León</option>
                            <option value="123">Ávila</option>
                            <option value="124">Ávila</option>
                            <option value="125">Burgos</option>
                            <option value="126">Burgos</option>
                            <option value="127">Miranda de Ebro</option>
                            <option value="128">León</option>
                            <option value="129">Astorga</option>
                            <option value="130">León</option>
                            <option value="131">Ponferrada</option>
                            <option value="132">Palencia</option>
                            <option value="133">Palencia</option>
                            <option value="134">Salamanca</option>
                            <option value="135">Ciudad Rodrigo</option>
                            <option value="136">Salamanca</option>
                            <option value="137">Segovia</option>
                            <option value="138">San Ildefonso</option>
                            <option value="139">Segovia</option>
                            <option value="140">Soria</option>
                            <option value="141">Soria</option>
                            <option value="142">Valladolid</option>
                            <option value="143">Simancas</option>
                            <option value="144">Valladolid</option>
                            <option value="145">Zamora</option>
                            <option value="146">Toro</option>
                            <option value="147">Zamora</option>
                            <option value="148">Catalonia</option>
                            <option value="149">Barcelona</option>
                            <option value="150">Badalona</option>
                            <option value="151">Barcelona</option>
                            <option value="152">Cornellà</option>
                            <option value="153">Granollers</option>
                            <option value="154">L’Hospitalet de Llobregat</option>
                            <option value="155">Manresa</option>
                            <option value="156">Mataró</option>
                            <option value="157">Reus</option>
                            <option value="158">Sabadell</option>
                            <option value="159">Santa Coloma de Gramenet</option>
                            <option value="160">Terrassa</option>
                            <option value="161">Vic</option>
                            <option value="162">Vilanova i la Geltrú</option>
                            <option value="163">Girona</option>
                            <option value="164">Girona</option>
                            <option value="165">Llívia</option>
                            <option value="166">Lleida</option>
                            <option value="167">Lleida</option>
                            <option value="168">Tarragona</option>
                            <option value="169">Tarragona</option>
                            <option value="170">Tortosa</option>
                            <option value="171">Ceuta (autonomous city)</option>
                            <option value="172">Extremadura</option>
                            <option value="173">Badajoz</option>
                            <option value="174">Almendralejo</option>
                            <option value="175">Badajoz</option>
                            <option value="176">Don Benito</option>
                            <option value="177">Mérida</option>
                            <option value="178">Villanueva de la Serena</option>
                            <option value="179">Cáceres</option>
                            <option value="180">Alcántara</option>
                            <option value="181">Cáceres</option>
                            <option value="182">Guadalupe</option>
                            <option value="183">Plasencia</option>
                            <option value="184">Trujillo</option>
                            <option value="185">Galicia</option>
                            <option value="186">A Coruña</option>
                            <option value="187">A Coruña</option>
                            <option value="188">Carballo</option>
                            <option value="189">Ferrol</option>
                            <option value="190">Ortigueira</option>
                            <option value="191">Ribeira</option>
                            <option value="192">Santiago de Compostela</option>
                            <option value="193">Lugo</option>
                            <option value="194">Lugo</option>
                            <option value="195">Mondoñedo</option>
                            <option value="196">Monforte de Lemos</option>
                            <option value="197">Vilalba</option>
                            <option value="198">Ourense</option>
                            <option value="199">Ourense</option>
                            <option value="200">Vigo</option>
                            <option value="201">Vilagarcía de Arousa</option>
                            <option value="202">Pontevedra</option>
                            <option value="203">Pontevedra</option>
                            <option value="204">Madrid</option>
                            <option value="205">Alcalá de Henares</option>
                            <option value="206">Aranjuez</option>
                            <option value="207">El Escorial</option>
                            <option value="208">Getafe</option>
                            <option value="209">Madrid</option>
                            <option value="210">Melilla</option>
                            <option value="211">Murcia</option>
                            <option value="212">Caravaca</option>
                            <option value="213">Cartagena</option>
                            <option value="214">Cieza</option>
                            <option value="215">Jumilla</option>
                            <option value="216">Lorca</option>
                            <option value="217">Murcia</option>
                            <option value="218">Yecla</option>
                            <option value="219">Navarra</option>
                            <option value="220">Funes</option>
                            <option value="221">Pamplona</option>
                            <option value="222">Roncesvalles</option>
                            <option value="223">La Rioja</option>
                            <option value="224">Calahorra</option>
                            <option value="225">Logroño</option>
                            <option value="226">Valencia</option>
                            <option value="227">Alicante</option>
                            <option value="228">Alcoy</option>
                            <option value="229">Alicante</option>
                            <option value="230">Elche</option>
                            <option value="231">Elda</option>
                            <option value="232">Orihuela</option>
                            <option value="233">Villena</option>
                            <option value="234">Castellón</option>
                            <option value="235">Castellón de la Plana</option>
                            <option value="236">Villarreal</option>
                            <option value="237">Valencia</option>
                            <option value="238">Alzira</option>
                            <option value="239">Gandía</option>
                            <option value="240">Requena</option>
                            <option value="241">Sagunto</option>
                            <option value="242">Sueca</option>
                            <option value="243">Torrent</option>
                            <option value="244">Valencia</option>
                        </select>
                    </div>
                    <button type="button" onclick="alert('Soon!')" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            @forelse($properties as $property)
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 10px;">
                        <div class="card-body">
                            <h4 class="card-title"><a href="/property/{{ $property->id }}">{{ $property->title }}</a></h4>
                            <img style="height: 200px; width: 100%; display: block;" src="{{ $property->small_photos[0] }}" alt="Card image">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <span style="margin-right: 10px" class="text-danger">{{ $property->price }} $</span>
                                    <span style="margin-right: 10px"><i class="fas fa-expand-arrows-alt"></i> {{ $property->area }} m<sup>2</sup></span>
                                    <span style="margin-right: 10px"><i class="fas fa-bed"></i> {{ $property->rooms }}</span>
                                    <span style="margin-right: 10px"><i class="fas fa-bath"></i> {{ $property->bathrooms }}</span>
                                </h6>
                                <p class="card-text">{{ Str::limit($property->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No property to show yet</p>
            @endforelse
        </div>

    </div>
@endsection

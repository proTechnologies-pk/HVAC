<style>
    .navbar-toggler {
        position: absolute !important;
        top: 14px !important;
        right: 21px !important;
    }

    .top_nav_1 {
        width: 40%;
    }

    .top_nav_1 a {
        font-size: 11px;
        color: black;
    }

    .top_nav_1 a:hover {
        color: #0f97d6;
        text-decoration: none;
    }

    .top_nav_1 b {
        font-size: 12px;
        color: #0f97d6;
        text-transform: uppercase;
    }

    .top_nav_1 hr {
        margin-top: 2px;
    }

    .nav_dropdown_link {
        font-size: 14px !important;
        color: black !important;
        text-transform: uppercase !important;
    }

    .nav_dropdown_link:hover {
        color: #0f97d6 !important;
    }

    .dropdown-menu {
        font-size: 14px !important;
    }

</style>


<div class="top_bar">
    <div class="top-header">
        <div class="menu-pages-menu-container">
            <ul id="menu-pages-menu" class="menu">
                <li id="menu-item-19"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-15 current_page_item menu-item-19">
                    <a href="https://thehvacservice.ca/" aria-current="page">Home</a>
                </li>
                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a
                        href="https://thehvacservice.ca/services/">Services</a></li>
                <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a
                        href="https://thehvacservice.ca/advantages/">Advantages</a></li>
            </ul>
        </div>
    </div>

</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-3" style="height: 53px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="margin-left: 33px;
      margin-top: 40px;
     ">
            <img src="https://global-uploads.webflow.com/5e157547d6f791d34ea4e2bf/6087f2b060c7a92408bac811_logo.svg"
                alt="" width="auto" height="24">
        </a>
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 152px;">


            <div class="dropdown">
                <a href="#" class="dropdown-toggle nav-link  nav_dropdown_link" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">HEATING</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 643px !important;">
                    <div class="row">

                        <div class="col-md-6">
                            <ul>
                                <span><b>FURNACE</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Furnace</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Furnace</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Furnace</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Tune up & Maintenance</a></li>
                                <br>
                                <span class="mt-3"><b>Air Handler</b></span>
                                <hr>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Air Handler</a></li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <span><b>BOILER</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Boiler</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Boiler</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Boiler</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Tune up & Maintenance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle nav-link  nav_dropdown_link" id="Cooling" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" href="#">Cooling</a>
                <div class="dropdown-menu" aria-labelledby="Cooling" style="min-width: 643px !important;">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <span><b>Air Conditioners</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Air Conditioners</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Air Conditioners</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Air Conditioners</a>
                                </li>
                                <li><a href="{{ route('products.buy', 3) }}">Tune up & Maintenance</a></li>
                                <br>
                                <span class="mt-3"><b>Heat Pumps</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Heat Pumps</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Heat Pumps</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Heat Pumps</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Tune up & Maintenance</a></li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <span><b>Ductless Air Conditioners</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Ductless Air
                                        Conditioners</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Ductless Air
                                        Conditioners</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Ductless Air
                                        Conditioners</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Tune up & Maintenance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle nav-link  nav_dropdown_link" id="Water_Heating"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Water Heating</a>
                <div class="dropdown-menu" aria-labelledby="Water_Heating" style="min-width: 643px !important;">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <span><b>Water Heater Tank</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Water Heater Tank</a>
                                </li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Water Heater Tank</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Water Heater Tank</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <span><b>Tankless Water Heaters</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Tankless Water
                                        Heaters</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Tankless Water Heaters</a>
                                </li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Tankless Water
                                        Heaters</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle nav-link  nav_dropdown_link" id="Water_Treatment"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Water Treatment</a>
                <div class="dropdown-menu" aria-labelledby="Water_Treatment" style="min-width: 643px !important;">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <span><b>Whole-House Carbon Filtration System</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Whole-House Carbon
                                        Filtration System</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Whole-House Carbon
                                        Filtration System</a></li>
                                <br>
                                <span class="mt-3"><b>Reverse Osmosis Drinking Water
                                        System</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent RODWS</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy RODWS</a></li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <span><b>Water Softener</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Water Softener</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Water Softener</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Repair Water Softener</a></li>
                                <br>
                                <span><b>Home Water Filters</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Home Water Filters</a>
                                </li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Home Water Filters</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle nav-link nav_dropdown_link" id="air_filteration"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Air Filteration</a>
                <div class="dropdown-menu" aria-labelledby="air_filteration" style="min-width: 643px !important;">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <span><b>HRV</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent HRV</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy HRV</a></li>
                                <br>
                                <span class="mt-3"><b>HEPA Filtration</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent HEPA Filtration</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Air Purification</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <span><b>Humidifier</b></span>
                                <hr>
                                <li><a href="{{ route('products.rent', 3) }}">Rent Humidifier</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Humidifier</a></li>
                                <li><a href="{{ route('products.buy', 3) }}">Buy Dehumidifier</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


@if (isset($settig))
    <div class="notice">
        <p class="text-center pt-3 text-white" style="font-size: 15px;">this is notice</p>
    </div>
@endif

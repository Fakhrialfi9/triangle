<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{-- Start Head --}}

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Triangle</title>
        <!-- Fav Icon -->
        <link href="Favicon.png" rel="icon" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
        <!-- JavaScript -->
        <script src="js/FunctionChart-Order.js"></script>
        <script src="js/FunctionChart-Leads.js"></script>
        <!-- Styles -->
        <link href="{{ asset('css/Main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/section/Dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/section/Navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/Framework.css') }}" rel="stylesheet">
        <link href="{{ asset('css/Root.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Link ke Chart.js CDN -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>
    {{-- End Head --}}

    {{-- Start Boody --}}

    <body>
        <main class="Main">
            <section class="MainSidebar">
                <x-sidebar></x-sidebar>
            </section>

            <section class="MainDashboard">
                <section class="MainNavbar">
                    <x-navbar></x-navbar>
                </section>
                <section class="MainPages">
                    <div class="Container">
                        <div class="DashboardContent">
                            <div class="DashboardContentTop">

                                <div class="BoxNumberChart">
                                    <div class="BoxNumberChartTopContent">
                                        <h5>Total Revenue</h5>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="BoxNumberChartBottomContent">
                                        <h3>$1258,600</h3>
                                        <h5>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                                </svg> +15%
                                            </span>
                                            From Last Week
                                        </h5>
                                    </div>
                                </div>

                                <div class="BoxNumberChart">
                                    <div class="BoxNumberChartTopContent">
                                        <h5>Conversion</h5>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="BoxNumberChartBottomContent">
                                        <h3>$18,600</h3>
                                        <h5>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                                </svg> +15%
                                            </span>
                                            From Last Week
                                        </h5>
                                    </div>
                                </div>

                                <div class="BoxNumberChart">
                                    <div class="BoxNumberChartTopContent">
                                        <h5>Subscriber</h5>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="BoxNumberChartBottomContent">
                                        <h3>2324,200</h3>
                                        <h5>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                                </svg> +15%
                                            </span>
                                            From Last Week
                                        </h5>
                                    </div>
                                </div>

                                <div class="BoxNumberChart">
                                    <div class="BoxNumberChartTopContent">
                                        <h5>Membership Renewals</h5>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="BoxNumberChartBottomContent">
                                        <h3>5621</h3>
                                        <h5>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                                </svg> +15%
                                            </span>
                                            From Last Week
                                        </h5>
                                    </div>
                                </div>

                            </div>

                            <div class="DashboardContentCenter">
                                <div class="BoxOrderChart">

                                    <div class="BoxOrderChartTopContent">
                                        <span class="HeaderChart">
                                            <h5>Order</h5>
                                        </span>



                                        <ul class="CurrentDateChart">
                                            <div class="diver-vertical"></div>
                                            <li>Current Month</li>
                                            <li>Current Weeks</li>
                                        </ul>
                                    </div>

                                    <div class="BoxOrderChartBottomContent">
                                        <canvas id="Order" width="400" height="200"></canvas>
                                    </div>

                                </div>
                                <div class="BoxLeadsChart animatedbtn">
                                    <div class="BoxOrderChartTopContent">
                                        <span class="HeaderChart">
                                            <h5>Leads</h5>
                                        </span>



                                        <ul class="CurrentDateChart">
                                            <div class="diver-vertical"></div>
                                            <li>Current Month</li>
                                            <li>Current Weeks</li>
                                        </ul>
                                    </div>

                                    <div class="BoxOrderChartBottomContent">
                                        <canvas id="Leads" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="DashboardContentBottom">
                                <div class="TableGenerateBoxContentTop">
                                    <h5>Generated Leads</h5>
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z" />
                                        </svg> Filter
                                    </button>
                                </div>
                                <div class="TableGenerateBoxContentBottom">
                                    <table>

                                        <thead>
                                            <tr>
                                                <th>Opportunity</th>
                                                <th>Company</th>
                                                <th>Value</th>
                                                <th>Starting Date</th>
                                                <th>Completion Rate</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Google Calendar</td>
                                                <td>Google</td>
                                                <td>$12,080</td>
                                                <td>Jan 19, 2024</td>
                                                <td>90%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Microsoft Office</td>
                                                <td>Microsoft</td>
                                                <td>$15,500</td>
                                                <td>Feb 5, 2024</td>
                                                <td>85%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Amazon Web Services</td>
                                                <td>Amazon</td>
                                                <td>$20,000</td>
                                                <td>Mar 1, 2024</td>
                                                <td>95%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Azure Cloud</td>
                                                <td>Microsoft</td>
                                                <td>$18,300</td>
                                                <td>Mar 15, 2024</td>
                                                <td>88%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Apple iCloud</td>
                                                <td>Apple</td>
                                                <td>$22,500</td>
                                                <td>Apr 10, 2024</td>
                                                <td>92%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Facebook Ads</td>
                                                <td>Facebook</td>
                                                <td>$10,200</td>
                                                <td>Apr 20, 2024</td>
                                                <td>89%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>IBM Watson</td>
                                                <td>IBM</td>
                                                <td>$13,000</td>
                                                <td>May 5, 2024</td>
                                                <td>84%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Alibaba Cloud</td>
                                                <td>Alibaba</td>
                                                <td>$14,800</td>
                                                <td>May 20, 2024</td>
                                                <td>87%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Tesla Autopilot</td>
                                                <td>Tesla</td>
                                                <td>$25,300</td>
                                                <td>Jun 1, 2024</td>
                                                <td>93%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Oracle Database</td>
                                                <td>Oracle</td>
                                                <td>$18,900</td>
                                                <td>Jun 10, 2024</td>
                                                <td>86%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Intel AI</td>
                                                <td>Intel</td>
                                                <td>$17,600</td>
                                                <td>Jun 20, 2024</td>
                                                <td>89%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Qualcomm Snapdragon</td>
                                                <td>Qualcomm</td>
                                                <td>$14,700</td>
                                                <td>Jul 5, 2024</td>
                                                <td>87%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Adobe Creative Cloud</td>
                                                <td>Adobe</td>
                                                <td>$21,400</td>
                                                <td>Jul 20, 2024</td>
                                                <td>91%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Salesforce CRM</td>
                                                <td>Salesforce</td>
                                                <td>$19,200</td>
                                                <td>Aug 1, 2024</td>
                                                <td>90%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>SAP HANA</td>
                                                <td>SAP</td>
                                                <td>$16,500</td>
                                                <td>Aug 15, 2024</td>
                                                <td>88%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Spotify Streaming</td>
                                                <td>Spotify</td>
                                                <td>$12,900</td>
                                                <td>Sep 1, 2024</td>
                                                <td>85%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Netflix Streaming</td>
                                                <td>Netflix</td>
                                                <td>$22,800</td>
                                                <td>Sep 15, 2024</td>
                                                <td>94%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Twitter Ads</td>
                                                <td>Twitter</td>
                                                <td>$9,800</td>
                                                <td>Oct 1, 2024</td>
                                                <td>82%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>LinkedIn Premium</td>
                                                <td>LinkedIn</td>
                                                <td>$11,500</td>
                                                <td>Oct 15, 2024</td>
                                                <td>83%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Dropbox Business</td>
                                                <td>Dropbox</td>
                                                <td>$13,200</td>
                                                <td>Nov 1, 2024</td>
                                                <td>85%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Snapchat Ads</td>
                                                <td>Snapchat</td>
                                                <td>$10,000</td>
                                                <td>Nov 15, 2024</td>
                                                <td>80%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Uber Eats</td>
                                                <td>Uber</td>
                                                <td>$17,000</td>
                                                <td>Dec 1, 2024</td>
                                                <td>88%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Pinterest Ads</td>
                                                <td>Pinterest</td>
                                                <td>$8,500</td>
                                                <td>Dec 15, 2024</td>
                                                <td>81%</td>
                                                <td><a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>
                </section>
            </section>
        </main>






    </body>
    {{-- End Boody --}}

</html>

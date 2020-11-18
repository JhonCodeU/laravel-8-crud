<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories and hospitals
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <style>
                    body {
                      font: 20px Montserrat, sans-serif;
                      line-height: 1.8;
                      color: #f5f6f7;
                    }
                    p {font-size: 16px;}
                    .margin {margin-bottom: 45px;}
                    .bg-1 { 
                      background-color: #1abc9c; /* Green */
                      color: #ffffff;
                    }
                    .bg-2 { 
                      background-color: #474e5d; /* Dark Blue */
                      color: #ffffff;
                    }
                    .bg-3 { 
                      background-color: #ffffff; /* White */
                      color: #555555;
                    }
                    .bg-4 { 
                      background-color: #2f2f2f; /* Black Gray */
                      color: #fff;
                    }
                    .container-fluid {
                      padding-top: 70px;
                      padding-bottom: 70px;
                    }
                    .navbar {
                      padding-top: 15px;
                      padding-bottom: 15px;
                      border: 0;
                      border-radius: 0;
                      margin-bottom: 0;
                      font-size: 12px;
                      letter-spacing: 5px;
                    }
                    .navbar-nav  li a:hover {
                      color: #1abc9c !important;
                    }
                    </style>
                                        <!-- First Container -->
                        <div class="container-fluid bg-1 text-center">
                            <h3 class="margin">Who Am I?</h3>
                            <img src="https://www.alizila.com/wp-content/uploads/2019/10/hospital-1-992x558.jpg " class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
                            <h3>I'm an adventurer</h3>
                        </div>
                        
                        <!-- Second Container -->
                        <div class="container-fluid bg-2 text-center">
                            <h3 class="margin">What Am I?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-search"></span> Search
                            </a>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</x-app-layout>

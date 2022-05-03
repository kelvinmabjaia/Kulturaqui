<!doctype html>
<html lang="en-US">
   
<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Kulturaqui</title>

   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}"/>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/typography.css') }}">
   <!-- Style -->
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
   <!-- Responsive -->
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" />

</head>

<body>

   <!-- Header -->
   <header id="main-header">
      <div class="main-header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <nav class="navbar navbar-expand-lg navbar-light py-3">
                     <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <div class="navbar-toggler-icon" data-toggle="collapse">
                           <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                           <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                           <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                        </div>
                     </a>
                     <a class="navbar-brand" href="index.html"> <img class="img-fluid logo" src="{{ asset('assets/logo.png') }}"/> </a>
                     
                     <div class="collapse navbar-collapse  d-flex flex-row-reverse" id="navbarSupportedContent">
                     <div class="navbar-right menu-right">
                        <ul class="d-flex align-items-center list-inline m-0">

                            @if (Auth::user())
                                <li>
                                    <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                    <img src="{{ asset('assets/user.jpg') }}" class="img-fluid avatar-40 rounded-circle"
                                        alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0 pl-3 pr-3">
                                                <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                    <div class="right-icon">
                                                        <i class="ri-file-user-line text-primary"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Manage Profile</h6>
                                                    </div>
                                                </div>
                                                </a>
                                                <a href="setting.html" class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                    <div class="right-icon">
                                                        <i class="ri-settings-4-line text-primary"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Settings</h6>
                                                    </div>
                                                </div>
                                                </a>
                                                <a href="pricing-plan-1.html" class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                    <div class="right-icon">
                                                        <i class="ri-settings-4-line text-primary"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Pricing Plan</h6>
                                                    </div>
                                                </div>
                                                </a>
                                                <a class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                    <div class="right-icon">
                                                        <i class="ri-logout-circle-line text-primary"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
    
                                                            <button type="submit" style="background: none; border: none;">
                                                                <h6 class="mb-0">Logout</h6>
                                                            </button>
                                                        </form>

                                                    </div>

                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item nav-icon">
                                    <a href="{{ route('login') }}" class="btn btn-large bg-danger">Login</a>
                                </li>
                            @endif
                            
                        
                        </ul>
                     </div>
                     </div>
                  </nav>
                  
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header End -->

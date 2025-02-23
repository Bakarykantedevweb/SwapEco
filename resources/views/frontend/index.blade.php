@extends('layouts.frontend')
@section('contend')
    <!-- START HOME -->
    <section class="bg-home" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center text-white mb-5">
                        <h1 class="display-5 fw-semibold mb-3">Bourse d'échanges 100% gratuit <span
                                class="text-warning fw-bold">Financez vos</span>
                                besoins avec vos surplus.</h1>
                        <p class="fs-17">Valorisez, ça vaut de l'or !.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
        <!--end container-->
    </section>

    <!-- End Home -->

    <!-- START SHAPE -->
    <div class="position-relative">
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150"
                preserveAspectRatio="none" viewBox="0 0 1440 220">
                <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                    <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z"
                        fill="rgba(255, 255, 255, 1)"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1004">
                        <rect width="1440" height="250" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>
        </div>
    </div>
    <!-- END SHAPE -->
    <div class="col-xl-12 bt-order">
        <div class="row">

            <div class="col-xl-4 col-sm-6" data-bs-toggle="tooltip" data-bs-html="true" title="Optimisez vos excédents; vos biens <br>inutilsés ou des services à échanger">
                <div class="dlab-cource bg-primary">
                    <div class="d-flex align-items-center">
                        <span class="course-icon" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 0.25H4C3.00544 0.25 2.05161 0.645088 1.34835 1.34835C0.645088 2.05161 0.25 3.00544 0.25 4V19C0.25 19.9946 0.645088 20.9484 1.34835 21.6517C2.05161 22.3549 3.00544 22.75 4 22.75H19C19.9946 22.75 20.9484 22.3549 21.6517 21.6517C22.3549 20.9484 22.75 19.9946 22.75 19V4C22.75 3.00544 22.3549 2.05161 21.6517 1.34835C20.9484 0.645088 19.9946 0.25 19 0.25ZM16.875 8.5125L11.1625 16.0125C11.0461 16.1638 10.8965 16.2864 10.7253 16.3709C10.5542 16.4554 10.3659 16.4995 10.175 16.5C9.98513 16.501 9.79753 16.4588 9.62643 16.3765C9.45532 16.2942 9.30522 16.174 9.1875 16.025L6.1375 12.1375C6.03655 12.0078 5.96212 11.8595 5.91848 11.7011C5.87484 11.5426 5.86283 11.3772 5.88314 11.2141C5.90346 11.051 5.95569 10.8935 6.03687 10.7506C6.11804 10.6077 6.22657 10.4822 6.35625 10.3812C6.61815 10.1774 6.95032 10.0859 7.27968 10.1269C7.44276 10.1472 7.60025 10.1994 7.74314 10.2806C7.88604 10.3618 8.01155 10.4703 8.1125 10.6L10.15 13.2L14.875 6.95C14.9751 6.81868 15.1002 6.70836 15.2429 6.62536C15.3857 6.54235 15.5434 6.48828 15.7071 6.46622C15.8707 6.44417 16.0371 6.45457 16.1968 6.49682C16.3564 6.53908 16.5062 6.61237 16.6375 6.7125C16.7688 6.81263 16.8791 6.93765 16.9621 7.08042C17.0451 7.22318 17.0992 7.3809 17.1213 7.54456C17.1433 7.70823 17.1329 7.87463 17.0907 8.03427C17.0484 8.19392 16.9751 8.34368 16.875 8.475V8.5125Z" fill="var(--secondary)"/>
                            </svg>
                        </span>	
                        <div class="ms-2">
                            <h4 class="mb-0" data-bs-toggle="tooltip" data-bs-html="true" title="Optimisez vos excédents; vos biens <br>inutilsés ou des services à échanger">VALORISEZ VOS EXCEDENTS </h4>
                            <span>Un gain économique</span>
                        </div>
                    </div>
                    <img src="https://blog.campusclub.eu/public/images/vector/check.png" alt="" data-bs-toggle="tooltip" data-bs-html="true" title="Optimisez vos excédents; vos biens <br>inutilsés ou des services à échanger">
                </div>
            </div>

            <div class="col-xl-4 col-sm-6">
                <div class="dlab-cource bg-primary">
                    <div class="d-flex align-items-center">
                        <span class="course-icon" >
                            <svg width="23" height="23" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.3201 4.65852H2.86175C2.35544 4.6591 1.87003 4.8592 1.51201 5.21494C1.15399 5.57068 0.952605 6.053 0.952026 6.55609V24.5829C0.952032 24.7573 1.00037 24.9282 1.09175 25.077C1.18312 25.2259 1.31399 25.3468 1.47 25.4266C1.626 25.5063 1.80111 25.5418 1.97609 25.5292C2.15108 25.5166 2.31918 25.4563 2.46195 25.355L8.5901 21.005L14.72 25.355C14.8628 25.4563 15.0309 25.5166 15.2058 25.5292C15.3808 25.5418 15.5559 25.5063 15.7119 25.4265C15.8679 25.3468 15.9988 25.2258 16.0901 25.077C16.1815 24.9282 16.2298 24.7572 16.2298 24.5829V6.55609C16.2292 6.053 16.0278 5.57068 15.6698 5.21494C15.3118 4.8592 14.8264 4.6591 14.3201 4.65852V4.65852Z" fill="#21262E"/>
                            <path d="M18.1395 0.863403H5.72635C5.4731 0.863403 5.23023 0.963364 5.05116 1.14129C4.87209 1.31923 4.77148 1.56055 4.77148 1.81218C4.77148 2.06382 4.87209 2.30514 5.05116 2.48307C5.23023 2.661 5.4731 2.76096 5.72635 2.76096H18.1395V20.7878C18.1395 21.0394 18.2401 21.2808 18.4192 21.4587C18.5983 21.6366 18.8412 21.7366 19.0944 21.7366C19.3476 21.7366 19.5905 21.6366 19.7696 21.4587C19.9487 21.2808 20.0493 21.0394 20.0493 20.7878V2.76096C20.0487 2.25788 19.8473 1.77556 19.4893 1.41982C19.1313 1.06408 18.6459 0.863979 18.1395 0.863403V0.863403Z" fill="#21262E"/>
                            </svg>
                        </span>	
                        <div class="ms-2">
                            <h4 class="mb-0" data-bs-toggle="tooltip" data-bs-html="true" title="Echangez, vendez vos objets  et <br>services en toute sécurité en campus">ECHANGEZ –VENDEZ</h4>
                            <span> En toute confiance </span>
                        </div>
                    </div>
                    <img src="https://blog.campusclub.eu/public/images/vector/bookmarks.png" class="bookmarks" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-sm-12">
                <div class="dlab-cource bg-primary">
                    <div class="d-flex align-items-center">
                        <span class="course-icon">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.4999 7.13426C12.1639 7.13426 10.8617 7.55464 9.7778 8.33585C8.69393 9.11705 7.88334 10.2195 7.46084 11.487C7.03834 12.7545 7.02536 14.1228 7.42373 15.3981C7.82209 16.6733 8.61162 17.791 9.68047 18.5926V23.6852C9.68047 24.3605 9.94874 25.0082 10.4263 25.4857C10.9038 25.9632 11.5514 26.2315 12.2268 26.2315H14.7731C15.4484 26.2315 16.096 25.9632 16.5736 25.4857C17.0511 25.0082 17.3194 24.3605 17.3194 23.6852V18.5926C18.3882 17.791 19.1777 16.6733 19.5761 15.3981C19.9745 14.1228 19.9615 12.7545 19.539 11.487C19.1165 10.2195 18.3059 9.11705 17.222 8.33585C16.1382 7.55464 14.836 7.13426 13.4999 7.13426ZM13.4999 5.86111C13.8376 5.86111 14.1614 5.72698 14.4002 5.48822C14.6389 5.24946 14.7731 4.92563 14.7731 4.58797V2.04167C14.7731 1.70401 14.6389 1.38018 14.4002 1.14142C14.1614 0.902659 13.8376 0.768524 13.4999 0.768524C13.1622 0.768524 12.8384 0.902659 12.5997 1.14142C12.3609 1.38018 12.2268 1.70401 12.2268 2.04167V4.58797C12.2268 4.92563 12.3609 5.24946 12.5997 5.48822C12.8384 5.72698 13.1622 5.86111 13.4999 5.86111ZM24.9582 12.2269H22.4119C22.0743 12.2269 21.7505 12.361 21.5117 12.5998C21.2729 12.8385 21.1388 13.1623 21.1388 13.5C21.1388 13.8377 21.2729 14.1615 21.5117 14.4003C21.7505 14.639 22.0743 14.7731 22.4119 14.7731H24.9582C25.2959 14.7731 25.6197 14.639 25.8585 14.4003C26.0973 14.1615 26.2314 13.8377 26.2314 13.5C26.2314 13.1623 26.0973 12.8385 25.8585 12.5998C25.6197 12.361 25.2959 12.2269 24.9582 12.2269ZM4.58788 12.2269H2.04158C1.70392 12.2269 1.38009 12.361 1.14133 12.5998C0.902567 12.8385 0.768433 13.1623 0.768433 13.5C0.768433 13.8377 0.902567 14.1615 1.14133 14.4003C1.38009 14.639 1.70392 14.7731 2.04158 14.7731H4.58788C4.92554 14.7731 5.24937 14.639 5.48813 14.4003C5.72689 14.1615 5.86102 13.8377 5.86102 13.5C5.86102 13.1623 5.72689 12.8385 5.48813 12.5998C5.24937 12.361 4.92554 12.2269 4.58788 12.2269ZM7.97445 6.39584L6.14112 4.58797C5.89294 4.35329 5.5617 4.22682 5.22027 4.23637C4.87884 4.24592 4.55519 4.39071 4.32051 4.63889C4.08584 4.88707 3.95937 5.21831 3.96892 5.55974C3.97847 5.90117 4.12326 6.22482 4.37144 6.45949L6.20477 8.22917C6.3278 8.34797 6.47351 8.44076 6.63319 8.50201C6.79287 8.56325 6.96325 8.5917 7.13417 8.58565C7.30567 8.585 7.47527 8.5497 7.63279 8.48188C7.79031 8.41406 7.9325 8.31511 8.05084 8.19098C8.2781 7.94248 8.39765 7.61407 8.38334 7.27763C8.36902 6.94119 8.222 6.62413 7.97445 6.39584ZM22.6538 4.65162C22.4153 4.4145 22.0926 4.2814 21.7563 4.2814C21.4199 4.2814 21.0972 4.4145 20.8587 4.65162L19.0254 6.39584C18.7882 6.63438 18.6551 6.95706 18.6551 7.29341C18.6551 7.62975 18.7882 7.95244 19.0254 8.19098C19.1437 8.31511 19.2859 8.41406 19.4434 8.48188C19.6009 8.5497 19.7705 8.585 19.942 8.58565C20.2698 8.58435 20.5845 8.45666 20.8205 8.22917L22.6538 6.45949C22.7732 6.34114 22.8679 6.20033 22.9325 6.04518C22.9972 5.89004 23.0304 5.72363 23.0304 5.55556C23.0304 5.38749 22.9972 5.22108 22.9325 5.06594C22.8679 4.91079 22.7732 4.76998 22.6538 4.65162Z" fill="var(--primary)"/>
                            </svg>
                        </span>	
                        <div class="ms-2">
                            <h4 class="mb-0" data-bs-toggle="tooltip" data-bs-html="true" title="Payez avec vos objets et services <br>en préservant vos finances et la planète">ECONOMISEZ MALIN</h4>
                            <span>Protéger la planète  </span>
                            
                        </div>
                    </div>
                    <a class="picto-item" href="#"><img src="https://blog.campusclub.eu/public/images/vector/bulb.png" class="bulb" alt=""></a
                </div>
            </div>
            
            

        </div>
    </div>
    <!-- START CATEGORY -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h3 class="title">Browser Jobs Categories </h3>
                        <p class="text-muted">Post a job to tell us about your project. We'll quickly match
                            you with the
                            right freelancers.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-layers-alt"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">IT & Software</h5>
                            </a>
                            <p class="text-muted mb-0">2024 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-airplay"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">Technology</h5>
                            </a>
                            <p class="text-muted mb-0">1250 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-bag"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">Government</h5>
                            </a>
                            <p class="text-muted mb-0">802 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-user-md"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">Accounting / Finance</h5>
                            </a>
                            <p class="text-muted mb-0">577 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-hospital"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">Construction / Facilities</h5>
                            </a>
                            <p class="text-muted mb-0">285 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-telegram-alt"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">Tele-communications</h5>
                            </a>
                            <p class="text-muted mb-0">495 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-scenery"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">Design & Multimedia</h5>
                            </a>
                            <p class="text-muted mb-0">1045 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="popu-category-box rounded text-center">
                        <div class="popu-category-icon icons-md">
                            <i class="uim uim-android-alt"></i>
                        </div>
                        <div class="popu-category-content mt-4">
                            <a href="job-categories.html" class="text-dark stretched-link">
                                <h5 class="fs-18">Human Resource</h5>
                            </a>
                            <p class="text-muted mb-0">1516 Jobs</p>
                        </div>
                    </div><!--end popu-category-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-5 text-center">
                        <a href="job-categories.html" class="btn btn-primary btn-hover">Browse All
                            Categories <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END CATEGORY -->

    <!-- START JOB-LIST -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title">New & Random Jobs</h4>
                        <p class="text-muted mb-1">Post a job to tell us about your project. We'll quickly
                            match you
                            with the right freelancers.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <ul class="job-list-menu nav nav-pills nav-justified flex-column flex-sm-row mb-4"
                        id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="recent-jobs-tab" data-bs-toggle="pill"
                                data-bs-target="#recent-jobs" type="button" role="tab"
                                aria-controls="recent-jobs" aria-selected="true">Recent Jobs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="featured-jobs-tab" data-bs-toggle="pill"
                                data-bs-target="#featured-jobs" type="button" role="tab"
                                aria-controls="featured-jobs" aria-selected="false">Featured Jobs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="freelancer-tab" data-bs-toggle="pill"
                                data-bs-target="#freelancer" type="button" role="tab"
                                aria-controls="freelancer" aria-selected="false">Freelancer</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="part-time-tab" data-bs-toggle="pill"
                                data-bs-target="#part-time" type="button" role="tab"
                                aria-controls="part-time" aria-selected="false">Part Time</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="full-time-tab" data-bs-toggle="pill"
                                data-bs-target="#full-time" type="button" role="tab"
                                aria-controls="full-time" aria-selected="false">Full Time</button>
                        </li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-jobs" role="tabpanel"
                            aria-labelledby="recent-jobs-tab">
                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-01.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Web Developer</a>
                                                </h5>
                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Oakridge Lane ssRichardson</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1000-1200/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                                <span class="badge bg-soft-info fs-13 mt-1">Private</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 1
                                                    - 2 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-02.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Business
                                                        Associate</a></h5>
                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>800-1800/m
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-danger fs-13 mt-1">Part
                                                    Time</span>
                                                <span class="badge bg-soft-info fs-13 mt-1">Private</span>
                                                <span
                                                    class="badge bg-soft-warning fs-13 mt-1">Urgent</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 0
                                                    - 1 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-03.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Digital Marketing
                                                        Manager</a></h5>
                                                <p class="text-muted fs-14 mb-0">Jobvia Technology Pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Phoenix, Arizona</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span
                                                    class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                                <span class="badge bg-soft-info fs-13 mt-1">Private</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span>
                                                    4+ years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-lg-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-04.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Product
                                                        Director</a></h5>
                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Escondido, California</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt">Full
                                                    Time</span>
                                                <span
                                                    class="badge bg-soft-warning fs-13 mt-1">Urgent</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 2
                                                    - 3 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="text-center mt-4 pt-2">
                                <a href="job-list.html" class="btn btn-primary">View More <i
                                        class="uil uil-arrow-right"></i></a>
                            </div>

                        </div>
                        <!--end recent-jobs-tab-->

                        <div class="tab-pane fade" id="featured-jobs" role="tabpanel"
                            aria-labelledby="featured-jobs-tab">
                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-01.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Web Developer</a>
                                                </h5>
                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1000-1200/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                                <span class="badge bg-soft-info fs-13 mt">Private</span>
                                                <span
                                                    class="badge bg-soft-warning fs-13 mt-1">Urgent</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 1
                                                    - 2 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-02.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Business
                                                        Associate</a></h5>
                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>800-1800/m </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-danger fs-13 mt-1">Part
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 0
                                                    - 1 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-03.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Digital Marketing
                                                        Manager</a></h5>
                                                <p class="text-muted fs-14 mb-0">Jobvia Technology Pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Phoenix, Arizona</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span
                                                    class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span>
                                                    4+ years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-lg-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-04.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Product
                                                        Director</a></h5>
                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Escondido, California</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 2
                                                    - 3 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="text-center mt-4 pt-2">
                                <a href="job-list.html" class="btn btn-primary">View More <i
                                        class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end featured-jobs-tab-->

                        <div class="tab-pane fade" id="freelancer" role="tabpanel"
                            aria-labelledby="freelancer-tab">
                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-01.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Web Developer</a>
                                                </h5>
                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1000-1200/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span
                                                    class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 1
                                                    - 2 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-02.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Business
                                                        Associate</a></h5>
                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>800-1800/m
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span
                                                    class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 0
                                                    - 1 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-03.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Digital Marketing
                                                        Manager</a></h5>
                                                <p class="text-muted fs-14 mb-0">Jobvia Technology Pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Phoenix, Arizona</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span
                                                    class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span>
                                                    4+ years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-lg-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-04.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Product
                                                        Director</a></h5>
                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Escondido, California</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span
                                                    class="badge bg-soft-purple fs-13 mt-1">Freelancer</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 2
                                                    - 3 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="text-center mt-4 pt-2">
                                <a href="job-list.html" class="btn btn-primary">View More <i
                                        class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end freelancer-tab-->

                        <div class="tab-pane fade" id="part-time" role="tabpanel"
                            aria-labelledby="part-time-tab">
                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-01.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Web Developer</a>
                                                </h5>
                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1000-1200/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-danger fs-13 mt-1">Part
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 1
                                                    - 2 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-02.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Business
                                                        Associate</a></h5>
                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>800-1800/m
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-danger fs-13 mt-1">Part
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 0
                                                    - 1 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-03.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Digital Marketing
                                                        Manager</a></h5>
                                                <p class="text-muted fs-14 mb-0">Jobvia Technology Pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0"> Phoenix, Arizona</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-danger fs-13 mt-1">Part
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span>
                                                    4+ years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-lg-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-04.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Product
                                                        Director</a></h5>
                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Escondido, California</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-danger fs-13 mt-1">Part
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 2
                                                    - 3 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="text-center mt-4 pt-2">
                                <a href="job-list.html" class="btn btn-primary">View More <i
                                        class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end part-time-tab-->

                        <div class="tab-pane fade" id="full-time" role="tabpanel"
                            aria-labelledby="full-time-tab">
                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-01.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Web Developer</a>
                                                </h5>
                                                <p class="text-muted fs-14 mb-0">Web Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Oakridge Lane Richardson</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1000-1200/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 1
                                                    - 2 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box bookmark-post card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-02.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Business
                                                        Associate</a></h5>
                                                <p class="text-muted fs-14 mb-0">Pixel Technology pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Dodge City, Louisiana</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>800-1800/m
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 0
                                                    - 1 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 col-md-5">
                                            <div>
                                                <p class="text-muted mb-0"><span class="text-dark">Notes
                                                        :</span>
                                                    languages only differ in their grammar. </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-md-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-03.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Digital Marketing
                                                        Manager</a></h5>
                                                <p class="text-muted fs-14 mb-0">Jobvia Technology Pvt.Ltd
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Phoenix, Arizona</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span>
                                                    4+ years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="job-box card mt-4">
                                <div class="bookmark-label text-center">
                                    <a href="javascript:void(0)" class="text-white align-middle"><i
                                            class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="text-center mb-4 mb-lg-0">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-04.png"
                                                        alt="" class="img-fluid rounded-3"></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                        class="text-dark">Product
                                                        Director</a></h5>
                                                <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                </div>
                                                <p class="text-muted mb-0">Escondido, California</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-2"><span
                                                        class="text-primary">$</span>1500-2400/m</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-2">
                                            <div>
                                                <span class="badge bg-soft-success fs-13 mt-1">Full
                                                    Time</span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <div>
                                                <p class="text-muted mb-0"><span
                                                        class="text-dark">Experience :</span> 2
                                                    - 3 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-2 col-md-3">
                                            <div class="text-start text-md-end">
                                                <a href="#applyNow" data-bs-toggle="modal"
                                                    class="primary-link">Apply Now <i
                                                        class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end job-box-->

                            <div class="text-center mt-4 pt-2">
                                <a href="job-list.html" class="btn btn-primary">View More <i
                                        class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end full-time-tab-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END JOB-LIST -->

    <!-- START PROCESS -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title me-5">
                        <h3 class="title">How It Work</h3>
                        <p class="text-muted">Post a job to tell us about your project. We'll quickly
                            match you with the
                            right freelancers.</p>
                        <div class="process-menu nav flex-column nav-pills" id="v-pills-tab"
                            role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                <div class="d-flex">
                                    <div class="number flex-shrink-0">
                                        1
                                    </div>
                                    <div class="flex-grow-1 text-start ms-3">
                                        <h5 class="fs-18">Register an account</h5>
                                        <p class="text-muted mb-0">Due to its widespread use as filler
                                            text for layouts, non-readability
                                            is of great importance.</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">
                                <div class="d-flex">
                                    <div class="number flex-shrink-0">
                                        2
                                    </div>
                                    <div class="flex-grow-1 text-start ms-3">
                                        <h5 class="fs-18">Find your job</h5>
                                        <p class="text-muted mb-0">There are many variations of passages
                                            of avaibookmark-label, but the majority
                                            alteration in some form.</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                href="#v-pills-messages" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">
                                <div class=" d-flex">
                                    <div class="number flex-shrink-0">
                                        3
                                    </div>
                                    <div class="flex-grow-1 text-start ms-3">
                                        <h5 class="fs-18">Apply for job</h5>
                                        <p class="text-muted mb-0">It is a long established fact that a
                                            reader will be distracted by the
                                            readable content of a page.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <img src="assets/images/process-01.png" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <img src="assets/images/process-02.png" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <img src="assets/images/process-03.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div> <!--end row-->
        </div><!--end container-->
    </section>
    <!-- END PROCESS -->

    <!--START CTA-->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h2 class="text-primary mb-4">Browse Our <span
                                class="text-warning fw-bold">5,000+</span> Latest
                            Jobs</h2>
                        <p class="text-muted">Post a job to tell us about your project. We'll quickly
                            match you with
                            the right freelancers.</p>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary btn-hover">Started Now
                                <i class="uil uil-rocket align-middle ms-1"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!--END CTA-->

    <!-- START TESTIMONIAL -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-4 pb-2">
                        <h3 class="title mb-3">Happy Candidates</h3>
                        <p class="text-muted">Post a job to tell us about your project. We'll quickly
                            match you with the
                            right freelancers.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="swiper testimonialSlider pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card testi-box">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <img src="assets/images/logo/mailchimp.svg" height="50"
                                                alt="">
                                        </div>
                                        <p class="testi-content lead text-muted mb-4">" Very well thought
                                            out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite
                                            patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0">Jeffrey Montgomery</h5>
                                        <p class="text-muted mb-0">Product Manager</p>
                                    </div>
                                </div>
                            </div><!--end swiper-slide-->
                            <div class="swiper-slide">
                                <div class="card testi-box">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <img src="assets/images/logo/wordpress.svg" height="50"
                                                alt="">
                                        </div>
                                        <p class="testi-content lead text-muted mb-4">" Very well thought
                                            out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite
                                            patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0">Rebecca Swartz</h5>
                                        <p class="text-muted mb-0">Creative Designer</p>
                                    </div>
                                </div>
                            </div><!--end swiper-slide-->
                            <div class="swiper-slide">
                                <div class="card testi-box">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <img src="assets/images/logo/Instagram.svg" height="50"
                                                alt="">
                                        </div>
                                        <p class="testi-content lead text-muted mb-4">" Very well thought
                                            out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite
                                            patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0">Charles Dickens</h5>
                                        <p class="text-muted mb-0">Store Assistant</p>
                                    </div>
                                </div>
                            </div><!--end swiper-slide-->
                        </div>
                        <!--end swiper-wrapper-->
                        <div class="swiper-pagination"></div>
                    </div>
                    <!--end swiper-container  -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>
    <!-- END TESTIMONIAL -->

    <!-- START BLOG -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-5">
                        <h3 class="title mb-3">Quick Career Tips</h3>
                        <p class="text-muted">Post a job to tell us about your project. We'll quickly
                            match you with the
                            right freelancers.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box card p-2 mt-3">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="assets/images/blog/img-01.jpg" alt="" class="img-fluid">
                            <div class="bg-overlay"></div>
                            <div class="author">
                                <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a
                                        href="javascript:void(0)" class="text-light user">Dirio
                                        Walls</a></p>
                                <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i>
                                    01 July, 2021</p>
                            </div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-white"><i
                                                class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-white"><i
                                                class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="blog-details.html" class="primary-link">
                                <h5 class="fs-17">How apps is the IT world ?</h5>
                            </a>
                            <p class="text-muted">The final text is not yet avaibookmark-label. Dummy
                                texts have Internet tend
                                been in use by typesetters since century.</p>
                            <a href="blog-details.html" class="form-text text-primary">Read more <i
                                    class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div><!--end blog-box-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="blog-box card p-2 mt-3">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="assets/images/blog/img-02.jpg" alt="" class="img-fluid">
                            <div class="bg-overlay"></div>
                            <div class="author">
                                <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a
                                        href="javascript:void(0)" class="text-light user">Brandon
                                        Carney</a></p>
                                <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i>
                                    25 June, 2021</p>
                            </div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-white"><i
                                                class="mdi mdi-heart-outline me-1"></i> 44</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-white"><i
                                                class="mdi mdi-comment-outline me-1"></i> 25</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="blog-details.html" class="primary-link">
                                <h5 class="fs-17">Smartest Applications for Business ?</h5>
                            </a>
                            <p class="text-muted">Due to its widespread use as filler text for layouts,
                                non-readability
                                is of great importance: human perception.</p>
                            <a href="blog-details.html" class="form-text text-primary">Read more <i
                                    class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div><!--end blog-box-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="blog-box card p-2 mt-3">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="assets/images/blog/img-03.jpg" alt="" class="img-fluid">
                            <div class="bg-overlay"></div>
                            <div class="author">
                                <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a
                                        href="javascript:void(0)" class="text-light user">William
                                        Mooneyhan</a></p>
                                <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i>
                                    16 March, 2021
                                </p>
                            </div>
                            <div class="likes">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-white"><i
                                                class="mdi mdi-heart-outline me-1"></i> 68</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-white"><i
                                                class="mdi mdi-comment-outline me-1"></i> 20</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="blog-details.html" class="primary-link">
                                <h5 class="fs-17">Design your apps in your own way ?</h5>
                            </a>
                            <p class="text-muted">One disadvantage of Lorum Ipsum is that in Latin certain
                                letters
                                appear more frequently than others.</p>
                            <a href="blog-details.html" class="form-text text-primary">Read more <i
                                    class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div><!--end blog-box-->
                </div><!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END BLOG -->
@endsection
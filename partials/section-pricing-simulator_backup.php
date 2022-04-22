<section id="pricingSimulator" class="pricing-simulator section-padding">
    <div class="container">
        <div class="section-title-wrapper additional-margin-top">
            <h2 class="section-title mb-1">
                Pricing Simulator
            </h2>
            <p class="section-title__description">
                Get customized tutoring price according to your needs
            </p>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-7 col-xl-8 mb-4">
                <div class="card-simulator">
                    <div class="card-simulator__item">
                        <div class="col-md-4 col-lg-4 col-xl-3 mb-2">
                            <label class="card-simulator__label">Select Grade</label>
                        </div>
                        <div class="col-md-8 col-lg-8 col-xl-9">
                            <div class="row row-cols-2 row-cols-xl-4 g-2 mb-2">
                                <div class="col">
                                    <input type="radio" class="btn-check" name="grade" id="success-outlined" autocomplete="off" checked>
                                    <label class="card-simulator__btn-grade--warning mb-3" for="success-outlined">Elementary School <br> <span class="card-simulator__btn-title">Grade 1-3</span></label>
                                </div>
                                <div class="col">
                                    <input type="radio" class="btn-check" name="grade" id="danger-outlined" autocomplete="off">
                                    <label class="card-simulator__btn-grade--warning mb-3" for="danger-outlined">Elementary School<br> <span class="card-simulator__btn-title">Grade 4-6</span></label>
                                </div>
                                <div class="col">
                                    <input type="radio" class="btn-check" name="grade" id="danger-outlined3" autocomplete="off">
                                    <label class="card-simulator__btn-grade--danger mb-3" for="danger-outlined3">Junior High School<br> <span class="card-simulator__btn-title">Grade 7-9</span></label>
                                </div>
                                <div class="col">
                                    <input type="radio" class="btn-check" name="grade" id="danger-outlined4" autocomplete="off">
                                    <label class="card-simulator__btn-grade--primary mb-3" for="danger-outlined4">High School<br> <span class="card-simulator__btn-title">Grade 10-12</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-simulator__item">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 mb-2">
                            <label class="card-simulator__label">Duration (month)</label>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-group mb-3 spinner">
                                <button class="btn-spiner spinner__btn-left minus dis" type="button" id="button-addon1"><i class="fas fa-minus"></i></i></button>
                                <input type="number" value="1" class="form-control spinner__input" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <button class="btn-spiner spinner__btn-right plus" type="button" id="button-addon1"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-simulator__item">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 mb-2">
                            <label class="card-simulator__label">Meeting (per week)</label>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-group mb-3 spinner">
                                <button class="btn-spiner spinner__btn-left minus dis" type="button" id="button-addon1"><i class="fas fa-minus"></i></button>
                                <input type="number" value="1" class="form-control spinner__input" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <button class="btn-spiner spinner__btn-right plus" type="button" id="button-addon1"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-accordion-pricing accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-6 mb-4">
                                                    <div class="card card-form-inner">
                                                        <div class="card-header text-center">
                                                            Day
                                                        </div>
                                                        <!-- <div class="list-group list-group-flush list-group-custom">
                                                            <a href="#" class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center" aria-current="true">
                                                                <span class="list-group-label">Monday</span>
                                                                <div class="list-group-info">2 meetings <span class="list-group-icon fas fa-chevron-right"></span></div>
                                                            </a>

                                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                                <span class="list-group-label">Tuesday</span>
                                                                <div class="list-group-info">0 meetings <span class="list-group-icon fas fa-chevron-right"></span></div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                                <span class="list-group-label">Wednesday</span>
                                                                <div class="list-group-info">2 meetings <span class="list-group-icon fas fa-chevron-right"></span></div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                                <span class="list-group-label">Thursday</span>
                                                                <div class="list-group-info">0 meetings <span class="list-group-icon  fas fa-chevron-right"></span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                                <span class="list-group-label">Friday</span>
                                                                <div class="list-group-info">2 meetings <span class="list-group-icon  fas fa-chevron-right"></span></div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                                <span class="list-group-label">Saturday</span>
                                                                <div class="list-group-info">0 meetings <span class="list-group-icon  fas fa-chevron-right"></span></div>
                                                            </a>
                                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                                <span class="list-group-label">Sunday</span>
                                                                <div class="list-group-info">0 meetings <span class="list-group-icon  fas fa-chevron-right"></span></div>
                                                            </a>
                                                        </div> -->

                                                        <div class="accordion-act">
                                                            <span class="accordion-act__label">Monday</span>
                                                            <span class="accordion-act__value">2 Meeting <i class="accordion-act__icon fas fa-chevron-right"></i></span>
                                                        </div>
                                                        <div class="panel">
                                                            <p>Lorem ipsum...</p>
                                                        </div>

                                                        <div class="accordion-act">
                                                            <span class="accordion-act__label">Tuesday</span>
                                                            <span class="accordion-act__value">0 Meeting <i class="accordion-act__icon fas fa-chevron-right"></i></span>
                                                        </div>
                                                        <div class="panel">
                                                            <p>Lorem ipsum...</p>
                                                        </div>

                                                        <div class="accordion-act">
                                                            <span class="accordion-act__label">Wednesday</span>
                                                            <span class="accordion-act__value">0 Meeting <i class="accordion-act__icon fas fa-chevron-right"></i></span>
                                                        </div>
                                                        <div class="panel">
                                                            <p>Lorem ipsum...</p>
                                                        </div>
                                                        <div class="accordion-act">
                                                            <span class="accordion-act__label">Thursday</span>
                                                            <span class="accordion-act__value">2 Meeting <i class="accordion-act__icon fas fa-chevron-right"></i></span>
                                                        </div>
                                                        <div class="panel">
                                                            <p>Lorem ipsum...</p>
                                                        </div>
                                                        <div class="accordion-act">
                                                            <span class="accordion-act__label">Friday</span>
                                                            <span class="accordion-act__value">2 Meeting <i class="accordion-act__icon fas fa-chevron-right"></i></span>
                                                        </div>
                                                        <div class="panel">
                                                            <p>Lorem ipsum...</p>
                                                        </div>
                                                        <div class="accordion-act">
                                                            <span class="accordion-act__label">Saturday</span>
                                                            <span class="accordion-act__value">2 Meeting <i class="accordion-act__icon fas fa-chevron-right"></i></span>
                                                        </div>
                                                        <div class="panel">
                                                            <p>Lorem ipsum...</p>
                                                        </div>
                                                        <div class="accordion-act">
                                                            <span class="accordion-act__label">Sunday</span>
                                                            <span class="accordion-act__value">2 Meeting <i class="accordion-act__icon fas fa-chevron-right"></i></span>
                                                        </div>
                                                        <div class="panel">
                                                            <p>Lorem ipsum...</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-6 mb-4">
                                                    <div class="card card-form-inner">
                                                        <div class=" card-header text-center">
                                                            Schedule
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mb-2 d-none d-sm-flex">
                                                                <div class="col-6 col-lg-6 text-center">
                                                                    <label> Subject</label>
                                                                </div>
                                                                <div class="col-6 col-lg-6 text-center">
                                                                    <label> Time</label>
                                                                </div>
                                                            </div>
                                                            <div id="scheduleForm" class="scheduleForm">
                                                                <div class="row mb-2 g-1 align-items-center">
                                                                    <div class="col-3 d-sm-none">
                                                                        <label class="scheduleForm__label"> Subject</label>
                                                                        <label class="scheduleForm__label"> Time</label>
                                                                    </div>
                                                                    <div class="col-7 col-sm-11 mb-2 mb-sm-0">
                                                                        <div class="row g-2">
                                                                            <div class="col-12 col-sm-6 mb-2 mb-sm-0">
                                                                                <select name="scheduleSubject" id="scheduleSubject" class="form-control select2 mb-2" required>
                                                                                    <option selected>Select Subject</option>
                                                                                    <option>English</option>
                                                                                    <option>Mathematics</option>
                                                                                    <option>Science</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6 mb-2 mb-sm-0">
                                                                                <select name="scheduleTime" id="scheduleTime" class="form-control select2 mb-2" required>
                                                                                    <option selected>Select Time</option>
                                                                                    <option>13:00-14:30</option>
                                                                                    <option>14:30-16:00</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-2 col-sm-1 text-end mb-2">
                                                                        <button class="btn btn-delete "><i class="far fa-trash-alt"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12 mt-3 d-grid gap-2">
                                                                    <button class="btn btn-third btn-add-schedule">
                                                                        <i class="btn-third__icon fas fa-plus-circle"></i>
                                                                        Add Schedule
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-6 col-md-4 col-lg-4">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Advanced
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="col-6 col-md-8 col-lg-8 text-end">
                                            <button class="btn btn-reset"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9994 3.00001C16.7579 2.9979 18.4985 3.35359 20.1153 4.04544C21.7322 4.73737 23.1915 5.75106 24.4042 7.02484L24.4218 7.04325L25.7583 8.59815C26.1184 9.01697 26.0707 9.64834 25.6519 10.0083C25.233 10.3684 24.6017 10.3207 24.2417 9.90187L22.9386 8.38594C21.9163 7.31711 20.6883 6.46608 19.3285 5.88416C17.961 5.29898 16.4887 4.99816 15.0012 5.00001L15.0006 5.00001H15C8.92728 5.00001 4 9.92729 4 16C4 22.0727 8.92725 27 14.9999 27M14.9994 3.00001C7.82238 3.00035 2 8.82293 2 16C2 23.1773 7.82271 29 15 29H15.0001C17.6887 28.9998 20.3111 28.1664 22.5066 26.6144C24.702 25.0624 26.3625 22.8682 27.2596 20.3337C27.4438 19.813 27.1712 19.2416 26.6505 19.0573C26.1299 18.873 25.5584 19.1457 25.3742 19.6664C24.6151 21.8111 23.2099 23.668 21.3521 24.9813C19.4943 26.2946 17.2751 26.9998 15 27" fill="#F77F73" />
                                                    <path d="M29.0001 6.08888V13.0001C29.0001 13.2653 28.8947 13.5197 28.7072 13.7072C28.5196 13.8948 28.2653 14.0001 28.0001 14.0001H21.0888C20.1976 14.0001 19.7513 12.9233 20.3813 12.2933L27.2932 5.38138C27.9232 4.75013 29.0001 5.19763 29.0001 6.08888Z" fill="#F77F73" />
                                                </svg>
                                                Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4  mb-4">
                <div class="card-sidebar">
                    <div class="card-sidebar__body">
                        <ul class="card-sidebar__list">
                            <li class="card-sidebar__list-item">
                                <label for="" class="card-sidebar__label">Total price x months</label>
                                <p class="card-sidebar__value">IDR. 999.000</p>
                            </li>
                            <li class="card-sidebar__list-item">
                                <label for="" class="card-sidebar__label">Price per month</label>
                                <p class="card-sidebar__value">IDR. 999.000</p>
                            </li>
                            <li class="card-sidebar__list-item">
                                <label for="" class="card-sidebar__label">Price per meeting</label>
                                <p class="card-sidebar__value">IDR. 120.000</p>
                            </li>
                        </ul>
                    </div>
                    <div class="card-sidebar__footer">
                        <div class="card-sidebar__note">
                            <div class="card-sidebar__note-image-container">
                                <img src="images/pages/pricing-simulator/sidebarnoteicon.svg" alt="icon">
                            </div>
                            <div class="card-sidebar__note-container">
                                <P>Get cheaper price by subscribe longer</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
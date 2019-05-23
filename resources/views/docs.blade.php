@extends('layouts.app')
@section('content')
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    ДОКУМЕНТАЛЬНАЯ БАЗА
                </h1>

                @if (auth()->guest())
                    <div class="users-block">
                        <a href="{{route('register')}}" class="btn register">{{__('auth.Register')}}</a>
                        <a href="{{route('login')}}" class="btn login">{{__('auth.signin')}}</a>
                    </div>
                @endif
            </div>

        </div>
    </section>

    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">


                <ul class="row base-list">
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title ">
                                <img src="{{asset('img/ii.jpg')}}" alt="" class="title-img">
                                <div class="title-text">Interactive Investor
                                </div>
                            </div>
                            <div class="item-description">
                                <p>Certificate (Company Number 319582257)</p>


                            </div>
                            <a href="{{route('docsII')}}" class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title ">
                                <img src="{{asset('img/cpi.png')}}" alt="" class="title-img">
                                <div class="title-text">China Pacific Insurance</div>
                            </div>
                            <div class="item-description">
                                <p>Insurance policy #18613</p>


                            </div>
                            <a href="{{route('docsCPI')}}" class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title ">
                                <img src="{{asset('img/cccl.png')}}" alt="" class="title-img">
                                <div class="title-text">China Communications Construction Ltd</div>
                            </div>
                            <div class="item-description">
                                <p>Договор N 124</p>


                            </div>
                            <a href="{{route('docsCCCL')}}" class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title ">
                                <img src="{{asset('img/gbsro.png')}}" alt="" class="title-img">
                                <div class="title-text">General Bytes S.R.O</div>
                            </div>
                            <div class="item-description">
                                <p>Договор №4182</p>


                            </div>
                            <a href="{{route('docsGBSRO')}}" class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/usa.svg')}}" alt="" class="title-img">
                                <div class="title-text">США</div>
                            </div>
                            <div class="item-description">
                                <p>Articles of incorporation (UBI Number: 604 352 703)</p>


                            </div>
                            <a href="https://ccfs.sos.wa.gov/#/" class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/england.svg')}}" alt="" class="title-img">
                                <div class="title-text">Англия</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate of incorporation of a Private Limited Company (Company Number
                                    11660684)</p>


                            </div>
                            <a href="https://beta.companieshouse.gov.uk/company/11660684"
                                class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/scotland.svg')}}" alt="" class="title-img">
                                <div class="title-text">Шотландия</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate of incorporation of a Private Limited Company (Company Number 612725)</p>


                            </div>
                            <a href="https://beta.companieshouse.gov.uk/company/SC612725"
                                class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/wales.svg')}}" alt="" class="title-img">
                                <div class="title-text">Уэльс</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate of incorporation of a Private Limited Company (Company Number
                                    11661561)</p>


                            </div>
                            <a href="https://beta.companieshouse.gov.uk/company/11661561"
                                class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/ireland.svg')}}" alt="" class="title-img">
                                <div class="title-text">Северная Ирландия</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate of incorporation of a Private Limited Company (Company Number
                                    NI656848)</p>


                            </div>
                            <a href="https://beta.companieshouse.gov.uk/company/NI656848"
                                class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/australia.svg')}}" alt="" class="title-img">
                                <div class="title-text">Австралия</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate of Registration of a Company (Company Number 629 835 365)</p>


                            </div>
                            <a href="https://connectonline.asic.gov.au/RegistrySearch/faces/landing/SearchRegisters.jspx?_adf.ctrl-state=fsi7zufvn_18"
                                class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/canada.svg')}}" alt="" class="title-img">
                                <div class="title-text">Канада</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate (Company Number 281184390)</p>


                            </div>
                            <a href="https://www.ic.gc.ca/app/ccc/srch/"
                                class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/new_zealand.svg')}}" alt="" class="title-img">
                                <div class="title-text">Новая
                                    Зеландия
                                </div>
                            </div>
                            <div class="item-description">
                                <p>Certificate of Incorporation (Company Number 7172696, NZBN: 9429047179226)</p>


                            </div>
                            <a href="https://companies-register.companiesoffice.govt.nz/"
                                class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/uar.svg')}}" alt="" class="title-img">
                                <div class="title-text">ЮАР</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate (Registration Number 2018 / 618210 / 07)</p>


                            </div>
                            <a href="http://www.cipc.co.za/za/" class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-xxl-3 base-item">
                        <div class="item-container">
                            <div class="item-title">
                                <img src="{{asset('img/hongkong.svg')}}" alt="" class="title-img">
                                <div class="title-text">Гонконг</div>
                            </div>
                            <div class="item-description">
                                <p>Certificate of Incorporation (Company Number 2768803)</p>


                            </div>
                            <a href="https://www.icris.cr.gov.hk/csci/" class="item-check"><i class="fas fa-search"></i><span>Проверить</span></a>
                        </div>
                    </li>

                </ul>


            </div>
        </div>
    </section>

    <section class="light-gradient sponsors">
        <div class="container">
            <div class=" sponsors-list">
                <a href="#" class=" sponsors-item"><img src="{{asset('img/pfmoney.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/payeer.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/comodo.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/qiwi.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/ddos.png')}}" alt=""></a>
            </div>

        </div>
    </section>
@endsection

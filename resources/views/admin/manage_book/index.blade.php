@extends('admin.layouts.default')

@section('title', 'ManageBook')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.list.book.css') }}" type="text/css">
@endsection

@section('content')
<div class="listbook__content">
            <section class="listbook__content-header col-md-12 col-xl-12">
                <div class="listbook__content-header-box">
                    <h1 class="listbook__content-header-box-ct">List Book</h1>
                    <span>Home|listbook</span>
                </div>
            </section>
            
            <section class="listbook__content-content">
                <div class="listbook__content-content-header">
                </div>

                <div class="listbook__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
                    <div class="row">
            <div class="col-xl-3 container__c3-choice" style="border-right: 1px black solid;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" id="Li1">Cras justo odio</li>
                    <li class="list-group-item" id="Li2">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>

            <div class="col-xl-9">
                    <div class="container__box-showbook">
                        <div class="row">
                            <div class="col-xl-12">
                                <input type="text" class="container__input-search">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-2" id="C2">
                                <div class="container__box-showbook-imgBook">
                                    <img src="https://library-management.com/uploads/6iFvN16AFN.jpg">
                                </div>
                                <div class="container__box-showbook-dataBook">
                                    <span>de thui heo ke bat tai</span>
                                    <span>100.000</span>
                                    <p>Huan Roise</p>
                                </div>
                                <div class="container__box-showbook-action">
                                                                <img src="https://img.icons8.com/emoji/20/000000/eye-emoji.png"/>
                                                                <img src="https://img.icons8.com/ios-filled/20/000000/uninstalling-updates.png"/>
                                                                <img src="https://img.icons8.com/color/20/000000/delete-forever.png"/>
                                                             </div>
                                
                            </div>

                            <div class="col-xl-2" id="C2">
                                <div class="container__box-showbook-imgBook">
                                    <img src="https://library-management.com/uploads/eGoOzU1YFFRfpPbVEXJTDVrJ8Uvzqei0ypGm3Ea9.jpg">
                                </div>
                                <div class="container__box-showbook-dataBook">
                                    <span>de thui heo ke bat tai</span>
                                    <span>100.000</span>
                                    <p>Huan Roise</p>
                                </div>
                                <div class="container__box-showbook-action">
                                                                <img src="https://img.icons8.com/emoji/20/000000/eye-emoji.png"/>
                                                                <img src="https://img.icons8.com/ios-filled/20/000000/uninstalling-updates.png"/>
                                                                <img src="https://img.icons8.com/color/20/000000/delete-forever.png"/>
                                                             </div>
                            </div>

                            <div class="col-xl-2" id="C2">
                                <div class="container__box-showbook-imgBook">
                                    <img src="https://library-management.com/uploads/iFrMdZl2ic.jpg">
                                </div>
                                <div class="container__box-showbook-dataBook">
                                    <span>de thui heo ke bat tai</span>
                                    <span>100.000</span>
                                    <p>Huan Roise</p>
                                </div>
                                <div class="container__box-showbook-action">
                                                                <img src="https://img.icons8.com/emoji/20/000000/eye-emoji.png"/>
                                                                <img src="https://img.icons8.com/ios-filled/20/000000/uninstalling-updates.png"/>
                                                                <img src="https://img.icons8.com/color/20/000000/delete-forever.png"/>
                                                             </div>
                            </div>

                            <div class="col-xl-2" id="C2">
                                <div class="container__box-showbook-imgBook">
                                    <img src="https://library-management.com/uploads/6iFvN16AFN.jpg">
                                </div>
                                <div class="container__box-showbook-dataBook">
                                    <span>de thui heo ke bat tai</span>
                                    <span>100.000</span>
                                    <p>Huan Roise</p>
                                </div>
                                <div class="container__box-showbook-action">
                                                                <img src="https://img.icons8.com/emoji/20/000000/eye-emoji.png"/>
                                                                <img src="https://img.icons8.com/ios-filled/20/000000/uninstalling-updates.png"/>
                                                                <img src="https://img.icons8.com/color/20/000000/delete-forever.png"/>
                                                             </div>
                            </div>

                            <div class="col-xl-2" id="C2">
                                <div class="container__box-showbook-imgBook">
                                    <img src="https://library-management.com/uploads/eGoOzU1YFFRfpPbVEXJTDVrJ8Uvzqei0ypGm3Ea9.jpg">
                                </div>
                                <div class="container__box-showbook-dataBook">
                                    <span>de thui heo ke bat tai</span>
                                    <span>100.000</span>
                                    <p>Huan Roise</p>
                                </div>
                                <div class="container__box-showbook-action">
                                                                <img src="https://img.icons8.com/emoji/20/000000/eye-emoji.png"/>
                                                                <img src="https://img.icons8.com/ios-filled/20/000000/uninstalling-updates.png"/>
                                                                <img src="https://img.icons8.com/color/20/000000/delete-forever.png"/>
                                                             </div>
                            </div>

                            <div class="col-xl-2" id="C2">
                                <div class="container__box-showbook-imgBook">
                                    <img src="https://library-management.com/uploads/meuoRCqKlF.jpg">
                                </div>
                                <div class="container__box-showbook-dataBook">
                                    <span>de thui heo ke bat tai</span>
                                    <span>100.000</span>
                                    <p>Huan Roise</p>
                                </div>
                                <div class="container__box-showbook-action">
                                                                <img src="https://img.icons8.com/emoji/20/000000/eye-emoji.png"/>
                                                                <img src="https://img.icons8.com/ios-filled/20/000000/uninstalling-updates.png"/>
                                                                <img src="https://img.icons8.com/color/20/000000/delete-forever.png"/>
                                                             </div>
                            </div>

                            <div class="col-xl-2" id="C2">
                                <div class="container__box-showbook-imgBook">
                                    <img src="https://library-management.com/uploads/0FI0gQ0qRI.jpg">
                                </div>
                                <div class="container__box-showbook-dataBook">
                                    <span>de thui heo ke bat tai</span>
                                    <span>100.000</span>
                                    <p>Huan Roise</p>
                                </div>
                                <div class="container__box-showbook-action">
                                                                <img src="https://img.icons8.com/emoji/20/000000/eye-emoji.png"/>
                                                                <img src="https://img.icons8.com/ios-filled/20/000000/uninstalling-updates.png"/>
                                                                <img src="https://img.icons8.com/color/20/000000/delete-forever.png"/>
                                                             </div>
                            </div>

                        
                        </div>
                    </div>
            </div>
        </div>
                    </div>



            </section>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/manage_book.js') }}"></script>
@endsection

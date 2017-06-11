@extends('layouts.client')

@section('content')

    <div class="container">
        <div class="row">

            <section class="content">
                <h1 class="text-center">Good Morning we have been waiting for you!!!!</h1>
                <h1 class="text-center">Invoices</h1>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Invoices needed to pay today (900)</h4>
                            <p><a href="" class="btn btn-info ">PAY All Verified Invoices</a></p>
                            <div class="pull-right" style="margin-bottom: 20px;">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-filter" data-target="paid">Paid</button>
                                    <button type="button" class="btn btn-danger btn-filter" data-target="pending">Pending</button>
                                    <button type="button" class="btn btn-default btn-filter" data-target="all">All</button>
                                </div>
                            </div>
                            <div class="table-container">
                                <table class="table table-filter">
                                    <tbody>
                                    <tr data-status="pending">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="{{ url('/client/invoice') }}" class="pull-left">
                                                    <img src="/images/faces/image-1.png" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="title">
                                                        Invoice #29001
                                                        <span class="pull-right label label-danger">unpaid</span>
                                                    </h4>
                                                    <span class="media-meta pull-right">February 13, 2016</span>
                                                    <p class="summary"><a href="ibans/GR8012345678901238126985255">Cutomer User0</a> Amount: 100,000 &euro; <span class="label label-success"> Verified</span></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox3">
                                                <label for="checkbox3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="/images/faces/image-2.png" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="title">
                                                        Invoice #29111
                                                        <span class="pull-right label label-danger">unpaid</span>

                                                    </h4>
                                                    <span class="media-meta pull-right">February 13, 2016</span>
                                                    <p class="summary"><a href="ibans/GR8012345678901238126985255">Cutomer User0</a> Amount: 100,000 &euro; <span class="label label-success"> Verified</span></p>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox2">
                                                <label for="checkbox2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="/images/faces/image-3.png" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="title">
                                                        Invoice # 24000
                                                        <span class="pull-right label label-danger">unpaid</span>
                                                    </h4>
                                                    <span class="media-meta pull-right">February 13, 2016</span>
                                                    <p class="summary">Customer <span class="label label-danger">un-Verified</span></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pending" class="">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox4" checked>
                                                <label for="checkbox4"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star star-checked">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="/images/faces/image-4.png" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="title">
                                                        Invoice #29111
                                                        <span class="pull-right label label-danger">unpaid</span>

                                                    </h4>
                                                    <span class="media-meta pull-right">February 13, 2016</span>
                                                    <p class="summary"><a href="ibans/GR8012345678901238126985255">Cutomer User0</a> Amount: 100,000 &euro; <span class="label label-success"> Verified</span></p>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="/images/faces/image-6.jpg" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">March 13, 2017</span>
                                                    <h4 class="title">
                                                        3el
                                                        <p class="alert alert-info">The information is wrong... <a href="/company/cy/HE171923">read more</a></p>
                                                        <span class="pull-right unpaid">unpaid</span>
                                                    </h4>
                                                    <p class="summary"><a href="/verify/cy">Cutomer User0</a> Amount: 100,000,000 &euro; <span class="label label-success"> Verified</span></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="/images/faces/image-5.png" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right pendiente">(Pendiente)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="/images/faces/image-5.png" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right pendiente">(Pendiente)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="/images/faces/image-5.png" width="75" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                        Lorem Impsum
                                                        <span class="pull-right pendiente">(Pendiente)</span>
                                                    </h4>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="content-footer">

                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {

        $('.fa-star').on('click', function () {
            $(this).removeClass('fa-star');
            $(this).addClass('fa-star-o');
        });

        $('.fa-star-o').on('click', function () {
            $(this).removeClass('fa-star-o');
            $(this).addClass('fa-star');
        });


        $('.ckbox label').on('click', function () {
            $(this).parents('tr').toggleClass('selected');
        });

        $('.btn-filter').on('click', function () {
            var $target = $(this).data('target');
            if ($target != 'all') {
                $('.table tr').css('display', 'none');
                $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
            } else {
                $('.table tr').css('display', 'none').fadeIn('slow');
            }
        });

    });
</script>
@endpush
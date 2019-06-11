@extends('backend.layout._header')

@section('content')

<div class="container">
    <div class="box-layout">
        <div class="main-layout full-width">
            <select class="fw-100 fw-lg-140 mb-20 mt-lg-15 mx-auto mx-sm-0 form-control outline bg-white rounded-half-circle">
                <option>Hoje</option>
                <option>Últimos 7 dias</option>
                <option>Últimos 14 dias</option>
                <option>Último mês</option>
            </select>
            <div class="row sm-gutter">
                <div class="col-12 col-sm-6 col-lg-3 font-weight-normal fadeInDown animated">
                    <div class="content-box d-flex justify-content-between align-items-center px-20 py-8 py-xl-15 position-relative">
                        <i class="icon mdi mdi-cart text-size-50 text-color-1" aria-hidden="true"></i>
                        <div class="text-center text-sm-right">
                            <div class="text-size-25">$1,500</div>
                            <div class="text-size-12 text-color-2">ITEM SALES</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-20 mt-sm-0 font-weight-normal fadeInDown animated">
                    <div class="content-box d-flex justify-content-between align-items-center px-20 py-8 py-xl-15 position-relative">
                        <div class="px-8 py-1 text-success border border-color-3 text-size-10 position-absolute posmt-8 posr-15 bg-white">+2%</div>
                        <i class="icon mdi mdi-forum text-size-50 text-color-1" aria-hidden="true"></i>
                        <div class="text-center text-sm-right">
                            <div class="text-size-25">3.521</div>
                            <div class="text-size-12 text-color-2">NEW ORDERS</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-20 mt-lg-0 font-weight-normal fadeInDown animated">
                    <div class="content-box d-flex justify-content-between align-items-center px-20 py-8 py-xl-15 position-relative">
                        <div class="px-8 py-1 text-danger border border-color-3 text-size-10 position-absolute posmt-8 posr-15 bg-white">-10%</div>
                        <i class="icon mdi mdi-map-marker text-size-50 text-color-1" aria-hidden="true"></i>
                        <div class="text-center text-sm-right">
                            <div class="text-size-25">2.145</div>
                            <div class="text-size-12 text-color-2">TOTAL PRODUCTS</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mt-20 mt-lg-0 font-weight-normal fadeInDown animated">
                    <div class="content-box d-flex justify-content-between align-items-center px-20 py-8 py-xl-15 position-relative">
                        <i class="icon mdi mdi-arrange-send-backward text-size-50 text-color-1" aria-hidden="true"></i>
                        <div class="text-center text-sm-right">
                            <div class="text-size-25">152.000</div>
                            <div class="text-size-12 text-color-2">UNIQUE VISITOR</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-9">
                    <div class="content-box mt-10 position-relative fadeInUp animated">
                        <div class="row no-gutters px-20 pt-20 pb-15 align-items-center">
                            <div class="col-6 col-md-8 col-lg-9 box-title">Sales Report</div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <ul class="nav nav-pills nav-light d-none d-sm-flex justify-content-end">
                                    <li class="nav-item"> <a class="nav-link active" href="#">Daily</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Weekly</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Monthly</a> </li>
                                </ul>
                                <div class="dropdown text-right d-sm-none">
                                    <i class="mdi mdi-dots-vertical text-size-22" role="button" aria-hidden="true" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Daily</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a> </div>
                                </div>
                            </div>
                        </div>
                        <canvas class="px-20 pb-20" id="line-chart" height="120"></canvas>
                        <div class="row no-gutters pt-10 pb-20">
                            <div class="col-6 col-sm-4 col-md text-center border-md-right border-color-3">
                                <div class="text-color-18 text-size-16"> <i class="mdi mdi-cart" aria-hidden="true"></i> <span class="font-weight-normal">1.700</span> </div>
                                <div class="text-size-11 text-color-2 font-weight-normal mt-5">SALES</div>
                            </div>
                            <div class="col-6 col-sm-4 col-md text-center border-md-right border-color-3">
                                <div class="text-color-18 text-size-16"> <i class="mdi mdi-chart-bar" aria-hidden="true"></i> <span class="font-weight-normal">1.000.000</span> </div>
                                <div class="text-size-11 text-color-2 font-weight-normal mt-5">SELLINGS</div>
                            </div>
                            <div class="col-6 col-sm-4 col-md mt-20 mt-sm-0 text-center border-md-right border-color-3">
                                <div class="text-color-18 text-size-16"> <i class="mdi mdi-comment-check-outline" aria-hidden="true"></i> <span class="font-weight-normal">102</span> </div>
                                <div class="text-size-11 text-color-2 font-weight-normal mt-5">COMMENTS</div>
                            </div>
                            <div class="col-6 col-sm-4 col-md mt-20 mt-md-0 text-center border-md-right border-color-3">
                                <div class="text-color-18 text-size-16"> <i class="mdi mdi-buffer" aria-hidden="true"></i> <span class="font-weight-normal">1.201</span> </div>
                                <div class="text-size-11 text-color-2 font-weight-normal mt-5">VIEWS</div>
                            </div>
                            <div class="col-6 col-sm-4 col-md mt-20 mt-md-0 text-center">
                                <div class="text-color-18 text-size-16"> <i class="mdi mdi-human-greeting" aria-hidden="true"></i> <span class="font-weight-normal">100</span> </div>
                                <div class="text-size-11 text-color-2 font-weight-normal mt-5">USERS</div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box mt-10 fadeInUp animated">
                        <div class="row no-gutters px-20 py-15 align-items-center">
                            <div class="col-12 col-sm-8 box-title">Top Rated Products</div>
                            <div class="col-12 col-sm-4">
                                <select class="w-100 fw-sm-120 form-control ml-auto mt-20 mt-sm-0 outline rounded-half-circle">
                                    <option>Today</option>
                                    <option>7 Days</option>
                                    <option>14 Days</option>
                                    <option>Last Month</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Images</th>
                                        <th class="text-center">Category</th>
                                        <th class="text-center">Stock</th>
                                        <th class="text-right">Sales</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="font-weight-normal align-middle text-nowrap">Lemon Water</td>
                                        <td class="align-middle py-8">
                                            <div class="fw-47 fh-37 item-thumbnail">
                                                <img class="rounded-half-circle" src="images/preview-6.jpg" alt="Generic placeholder image">
                                                <a class="fh-18 px-6 my-auto pt-4 text-size-11 lh-11 rounded-half-circle font-weight-normal" href="">view 2+</a>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">Food &amp; Drink</td>
                                        <td class="text-center align-middle">
                                            <div class="fw-6 fh-6 d-inline-block mr-5 bg-success rounded-circle"></div>
                                            Available
                                        </td>
                                        <td class="text-right font-weight-normal align-middle">$1.923</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <a href=""><i class="mdi mdi-magnify" aria-hidden="true"></i> View Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-normal align-middle text-nowrap">Pocari Sweat</td>
                                        <td class="align-middle py-8">
                                            <div class="fw-47 fh-37 item-thumbnail">
                                                <img class="rounded-half-circle" src="images/preview-7.jpg" alt="Generic placeholder image">
                                                <a class="fh-18 px-6 my-auto pt-4 text-size-11 lh-11 rounded-half-circle font-weight-normal" href="">view 3+</a>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">Food &amp; Drink</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <div class="fw-6 fh-6 d-inline-block mr-5 bg-warning rounded-circle"></div>
                                            Low Stock
                                        </td>
                                        <td class="text-right font-weight-normal align-middle">$1.410</td>
                                        <td class="text-center align-middle">
                                            <a href=""><i class="mdi mdi-magnify" aria-hidden="true"></i> View Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-normal align-middle text-nowrap">Iphone X</td>
                                        <td class="align-middle py-8">
                                            <div class="fw-47 fh-37 item-thumbnail">
                                                <img class="rounded-half-circle" src="images/preview-8.jpg" alt="Generic placeholder image">
                                                <a class="fh-18 px-6 my-auto pt-4 text-size-11 lh-11 rounded-half-circle font-weight-normal" href="">view 1+</a>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">Gadget &amp; Smartphone</td>
                                        <td class="text-center align-middle">
                                            <div class="fw-6 fh-6 d-inline-block mr-5 bg-success rounded-circle"></div>
                                            Available
                                        </td>
                                        <td class="text-right font-weight-normal align-middle">$6.753</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <a href=""><i class="mdi mdi-magnify" aria-hidden="true"></i> View Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-normal align-middle text-nowrap">Rog Phone</td>
                                        <td class="align-middle py-8">
                                            <div class="fw-47 fh-37 item-thumbnail">
                                                <img class="rounded-half-circle" src="images/preview-9.jpg" alt="Generic placeholder image">
                                                <a class="fh-18 px-6 my-auto pt-4 text-size-11 lh-11 rounded-half-circle font-weight-normal" href="">view 5+</a>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">Gadget &amp; Smartphone</td>
                                        <td class="text-center align-middle">
                                            <div class="fw-6 fh-6 d-inline-block mr-5 bg-danger rounded-circle"></div>
                                            No Stock
                                        </td>
                                        <td class="text-right font-weight-normal align-middle">$8.030</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <a href=""><i class="mdi mdi-magnify" aria-hidden="true"></i> View Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-normal align-middle text-nowrap">Lemon Water</td>
                                        <td class="align-middle py-8">
                                            <div class="fw-47 fh-37 item-thumbnail">
                                                <img class="rounded-half-circle" src="images/preview-6.jpg" alt="Generic placeholder image">
                                                <a class="fh-18 px-6 my-auto pt-4 text-size-11 lh-11 rounded-half-circle font-weight-normal" href="">view 2+</a>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">Food &amp; Drink</td>
                                        <td class="text-center align-middle">
                                            <div class="fw-6 fh-6 d-inline-block mr-5 bg-success rounded-circle"></div>
                                            Available
                                        </td>
                                        <td class="text-right font-weight-normal align-middle">$1.923</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <a href=""><i class="mdi mdi-magnify" aria-hidden="true"></i> View Details</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row no-gutters px-20 py-15 align-items-center">
                            <div class="col-12 col-md-2">
                                <select class="w-100 fw-md-80 form-control outline rounded-half-circle">
                                    <option>5</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-5 mt-20 mt-md-0 text-center">Showing 5 of 21 list</div>
                            <div class="col-12 col-md-5 mt-20 mt-md-0">
                                <nav aria-label="Pagination">
                                    <ul class="pagination no-border justify-content-center justify-content-md-end mb-0">
                                        <li class="page-item"><a class="page-link" href="#">First</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Last</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="row sm-gutter">
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-12">
                            <div class="content-box p-20 mt-10 fadeInRight animated">
                                <div class="d-flex justify-content-between">
                                    <div class="box-title">Top Sellers</div>
                                    <a href="" class="mt-2">See All</a>
                                </div>
                                <div class="media mt-20">
                                    <img class="mr-15 fw-45 rounded-half-circle" src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="media-body mt-4">
                                        <div>Wade Finnegan</div>
                                        <div class="mt-2 text-color-2">Hi, what's up?</div>
                                    </div>
                                </div>
                                <div class="media mt-20">
                                    <img class="mr-15 fw-45 rounded-half-circle" src="images/profile-2.jpg" alt="Generic placeholder image">
                                    <div class="media-body mt-4">
                                        <div>Wiley Gladwyn</div>
                                        <div class="mt-2 text-color-2">New job offer?</div>
                                    </div>
                                </div>
                                <div class="media mt-20">
                                    <img class="mr-15 fw-45 rounded-half-circle" src="images/profile-3.jpg" alt="Generic placeholder image">
                                    <div class="media-body mt-4">
                                        <div>Ford Newton</div>
                                        <div class="mt-2 text-color-2">Hi Reina...</div>
                                    </div>
                                </div>
                                <div class="media mt-20">
                                    <img class="mr-15 fw-45 rounded-half-circle" src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="media-body mt-4">
                                        <div>Wade Finnegan</div>
                                        <div class="mt-2 text-color-2">Hi, what's up?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-8 col-xl-12">
                            <div class="row sm-gutter">
                                <div class="col-12 col-lg-6 col-xl-12">
                                    <div class="content-box p-20 mt-10 fadeInRight animated">
                                        <div class="d-flex justify-content-between">
                                            <div class="box-title">Browser Visitor</div>
                                            <a href="" class="mt-2">Refresh</a>
                                        </div>
                                        <div class="d-flex mt-15">
                                            <div class="mr-auto">Google Chrome</div>
                                            <div class="badge rounded-half-circle px-6 py-4">52%</div>
                                        </div>
                                        <div class="d-flex mt-15">
                                            <div class="mr-auto">Safari</div>
                                            <div class="badge rounded-half-circle px-6 py-4">18%</div>
                                        </div>
                                        <div class="d-flex mt-15">
                                            <div class="mr-auto">Microsoft Edge</div>
                                            <div class="badge rounded-half-circle px-6 py-4">22%</div>
                                        </div>
                                        <div class="d-flex mt-15">
                                            <div class="mr-auto">Opera</div>
                                            <div class="badge rounded-half-circle px-6 py-4">15%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-12">
                                    <div class="bg-white border border-color-3 p-20 mt-10 fadeInRight animated">
                                        <div class="text-size-14 lh-22">Genius is one percent inspiration and ninety-nine percent perspiration.</div>
                                        <div class="text-color-2 mt-5">1 Jan 2018, via desktop</div>
                                        <div class="d-flex align-items-end mt-20">
                                            <i class="mdi mdi-facebook text-size-20 lh-20 text-color-4" aria-hidden="true"></i>
                                            <div class="ml-auto"> <i class="mdi mdi-comment-multiple text-size-12 text-color-2 mr-2" aria-hidden="true"></i> 21 </div>
                                            <div class="ml-10"> <i class="mdi mdi-star text-size-15 text-color-2 mr-2" aria-hidden="true"></i> 31 </div>
                                        </div>
                                    </div>
                                    <div class="bg-white border border-color-3 p-20 mt-10 fadeInRight animated">
                                        <div class="text-size-14 lh-22">Our greatest weakness lies in giving up. The most certain way to succeed.</div>
                                        <div class="text-color-2 mt-5">3 Jan 2018, via mobile</div>
                                        <div class="d-flex align-items-end mt-20">
                                            <i class="mdi mdi-twitter text-size-20 lh-20 text-color-5" aria-hidden="true"></i>
                                            <div class="ml-auto"> <i class="mdi mdi-comment-multiple text-size-12 text-color-2 mr-2" aria-hidden="true"></i> 21 </div>
                                            <div class="ml-10"> <i class="mdi mdi-star text-size-15 text-color-2 mr-2" aria-hidden="true"></i> 31 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


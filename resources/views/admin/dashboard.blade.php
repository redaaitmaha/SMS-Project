@extends('layout.master')


@section('title')
    Eduker - Dashboard
@endsection


@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Dashboard 01</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Users</h6>
                                                <h2 class="mb-0 number-font">44,278</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="saleschart"
                                                        class="h-8 w-9 chart-dropshadow chartjs-render-monitor"
                                                        width="120" height="80"
                                                        style="display: block; height: 64px; width: 96px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-muted fs-12"><span class="text-secondary"><i
                                                    class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                            Last week</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Teachers</h6>
                                                <h2 class="mb-0 number-font">{{ $teachers }}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <canvas id="leadschart"
                                                        class="h-8 w-9 chart-dropshadow chartjs-render-monitor"
                                                        width="120" height="80"
                                                        style="display: block; height: 64px; width: 96px;"></canvas> --}}
                                                    <i class="icon icon-graduation" width="120"
                                                        style="font-size:60px;color:#0dcaf0"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-muted fs-12"><span class="text-pink"><i
                                                    class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                            Last 6 days</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Parents</h6>
                                                <h2 class="mb-0 number-font"> {{ $parents }} </h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <i class="icon icon-people" width="120"
                                                        style="font-size:60px;color:#6c5ffc"></i>

                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-muted fs-12"><span class="text-green"><i
                                                    class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                            Last 9 days</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Cost</h6>
                                                <h2 class="mb-0 number-font">$59,765</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <div class="chartjs-size-monitor"
                                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                        <div class="chartjs-size-monitor-expand"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink"
                                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                            <div
                                                                style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="costchart"
                                                        class="h-8 w-9 chart-dropshadow chartjs-render-monitor"
                                                        width="120" height="80"
                                                        style="display: block; height: 64px; width: 96px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-muted fs-12"><span class="text-warning"><i
                                                    class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                            Last year</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

                <!-- ROW-2 -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sales Analytics</h3>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mx-auto text-center justify-content-center mb-4">
                                    <div class="d-flex text-center justify-content-center me-3"><span
                                            class="dot-label bg-primary my-auto"></span>Total Sales</div>
                                    <div class="d-flex text-center justify-content-center"><span
                                            class="dot-label bg-secondary my-auto"></span>Total Orders</div>
                                </div>
                                <div class="chartjs-wrapper-demo">
                                    <div class="chartjs-size-monitor"
                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                            </div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                    </div>
                                    <canvas id="transactions" class="chart-dropshadow chartjs-render-monitor"
                                        height="660" style="display: block; height: 330px; width: 881px;"
                                        width="1762"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-0 bg-recentorder">
                                <h3 class="card-title text-white">Recent Orders</h3>
                                <div class="chartjs-wrapper-demo">
                                    <div class="chartjs-size-monitor"
                                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                            </div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink"
                                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                    </div>
                                    <canvas id="recentorders" class="chart-dropshadow chartjs-render-monitor"
                                        height="450" style="display: block; height: 225px; width: 244px;"
                                        width="488"></canvas>
                                </div>
                            </div>
                            <div id="flotback-chart" class="flot-background" style="padding: 0px;"><canvas
                                    class="flot-base" width="878" height="375"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 702.8px; height: 300px;"></canvas><canvas
                                    class="flot-overlay" width="878" height="375"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 702.8px; height: 300px;"></canvas>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-4 mt-3">
                                    <div class="avatar avatar-md bg-secondary-transparent text-secondary bradius me-3">
                                        <i class="fe fe-check"></i>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-1 fw-semibold">Delivered Orders</h6>
                                        <p class="fw-normal fs-12"> <span class="text-success">3.5%</span>
                                            increased </p>
                                    </div>
                                    <div class=" ms-auto my-auto">
                                        <p class="fw-bold fs-20"> 1,768 </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="avatar  avatar-md bg-pink-transparent text-pink bradius me-3">
                                        <i class="fe fe-x"></i>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-1 fw-semibold">Cancelled Orders</h6>
                                        <p class="fw-normal fs-12"> <span class="text-success">1.2%</span>
                                            increased </p>
                                    </div>
                                    <div class=" ms-auto my-auto">
                                        <p class="fw-bold fs-20 mb-0"> 3,675 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                </div>
                <!-- ROW-2 END -->


                <!-- ROW-3 END -->

                <!-- ROW-4 -->

                <!-- ROW-4 END -->
            </div>
        </div>
    </div>
@endsection

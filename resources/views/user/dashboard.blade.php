@extends('user.base')
@section('content')

    <div class="today-card-area pt-24">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Today's Eaarning</span>
                            <h6>$63,000 </h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/discount.png')}}" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Account Balance</span>
                            <h6>${{number_format($user->profit,2)}}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/user.png')}}" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Referral Balance</span>
                            <h6>${{number_format($user->refBal,2)}}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/groop.png')}}" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Withdrawals</span>
                            <h6>${{number_format($user->withdrawals,2)}}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/discount.png')}}" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overview-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="chart-wrap">
                        <div class="sales-overview d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h6 class="overview-content">
                                    Investment Overview
                                    <i class="ri-arrow-up-line"></i>
                                    <span class="more">4% More in 2021</span>
                                </h6>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <ul>
                                    <li>
                                        <span>This Month</span>
                                        <h6 class="this-month">$86,589</h6>
                                    </li>
                                    <li>
                                        <span>Last Month</span>
                                        <h6>$86,589</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="ana_dash_1"></div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="active-user">
                        <div id="stacked-column-chart-2"></div>

                        <div class="active-user-content-wrap">
                            <h6 class="active-user-content">
                                Profit Overview
                                <i class="ri-arrow-up-line"></i>
                            </h6>

                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <div class="active-single-item">
                                        <p>
                                            <img src="{{asset('dashboard/user/images/icon/user-2.png')}}" alt="Images">
                                            Ongoing Investments
                                            <span>
                                                {{number_format($ongoingInvestments->count(),2)}}
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <div class="active-single-item">
                                        <p>
                                            <img src="{{asset('dashboard/user/images/icon/curser.png')}}" alt="Images">
                                            Completed Investments
                                            <span>{{number_format($completedInvestments->count(),2)}}</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <div class="active-single-item">
                                        <p>
                                            <img src="{{asset('dashboard/user/images/icon/discount-2.png')}}" alt="Images">
                                            Pending Deposits
                                            <span>{{number_format($pendingWithdrawal->count(),2)}}</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-md-3">
                                    <div class="active-single-item">
                                        <p>
                                            <img src="{{asset('dashboard/user/images/icon/items.png')}}" alt="Images">
                                            Completed Withdrawals
                                            <span> {{number_format($withdrawals->count(),2)}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="latest-transaction-area">
        <div class="container-fluid">
            <div class="table-responsive" data-simplebar>
                <h5 class="mb-2">Most Recent Transactions</h5>
                <table class="table align-middle mb-0">
                    <thead>
                    <tr>
                        <th width="25%">ID</th>
                        <th width="25%">AMOUNT</th>
                        <th width="25%">DATE</th>
                        <th width="25%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($latests as $latest)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        #{{$latest->reference}}
                                    </label>
                                </div>
                            </td>
                            <td>
                                {{number_format($latest->amount,2)}}
                            </td>
                            <td>
                                {{strtoupper(date('d M, Y - h:i a',strtotime($latest->created_at)))}}
                            </td>
                            <td>
                                <a href="{{route('invest_detail',['id'=>$latest->id])}}" class="read-more">
                                    View Details
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Link
            </h6>
        </div>
        <div class="card-body row">
            <div class="col-md-12 mx-auto">

                <div class="form-row">
                    <div class="form-group col-md-6 mx-auto">
                        <label for="inputEmail4">Referral Link</label>
                        <input type="text" class="form-control" id="inputEmail4"
                               value="{{route('register',['referral'=>$user->username])}}" readonly>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button  class="btn btn-primary copy"
                             data-clipboard-target="#inputEmail4">copy</button>
                </div>
            </div>
        </div>
    </div>
    <br><br>

@endsection

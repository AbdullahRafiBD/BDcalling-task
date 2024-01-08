@extends('front.layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 pt-5">
                <form action="{{ route('convert') }}" method="post" class="border rounded mt-5 pt-5">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4 text-center">
                            <h4 class="col-md-12 py-2 m-0">Fetch Currency Exchange Rates In Laravel - BDCalling Task
                            </h4>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <select class="form-control" name="from_currency" required>
                                        @foreach ($parsedData as $key => $item)
                                            <option value="{{ $item }}">{{ $key }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <h4 class="col-md-2 text-center m-0 p-0">To</h4>
                                <div class="col-md-5 mb-3">
                                    <select class="form-control" name="to_currency" required>

                                        @foreach ($parsedData as $key => $item)
                                            <option value="{{ $item }}">{{ $key }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Amount</label>
                            @if (Session::has('amount'))
                                <input type="number" name="amount" class="form-control"
                                    value="{{ Session::get('amount') }}" required>
                            @else
                                <input type="number" name="amount" class="form-control" value="" required>
                            @endif


                        </div>



                        @if (Session::has('bankAccountFee'))
                            <div class="mt-5 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>Bank fee</label>
                                    <input type="number" name="amount" value="{{ Session::get('bankAccountFee') }}"
                                        disabled>
                                </div>
                            </div>
                        @else
                            <div class="mt-5 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>Bank fee</label>
                                    <input type="number" name="amount" value="0" disabled>
                                </div>
                            </div>
                        @endif

                        @if (Session::has('ourFee'))
                            <div class="mt-0 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>Our fee</label>
                                    <input type="number" name="amount" value="{{ Session::get('ourFee') }}" disabled>
                                </div>
                            </div>
                        @else
                            <div class="mt-0 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>Our fee</label>
                                    <input type="number" name="amount" value="0" disabled>
                                </div>
                            </div>
                        @endif

                        @if (Session::has('totalFee'))
                            <div class="mt-0 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>total fee</label>
                                    <input type="number" name="amount" value="{{ Session::get('totalFee') }}" disabled>
                                </div>
                            </div>
                        @else
                            <div class="mt-0 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>total fee</label>
                                    <input type="number" name="amount" value="0" disabled>
                                </div>
                            </div>
                        @endif

                        @if (Session::has('total_amount'))
                            <div class="mt-0 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>Converted Amount</label>
                                    <input type="number" name="amount" value="{{ Session::get('total_amount') }}"
                                        disabled>
                                </div>
                            </div>
                        @else
                            <div class="mt-0 col-md-12 d-flex justify-content-center mb-4">
                                <div class="mb-3">
                                    <label>Converted Amount you will get</label>
                                    <input type="number" name="amount" value="" disabled>
                                </div>
                            </div>
                        @endif


                        <div class="col-md-12 d-flex justify-content-center mb-4">
                            <button type="submit" class="col-3 btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

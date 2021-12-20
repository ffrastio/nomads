@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item ">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0 mb-3">
                        <div class="card card-details">
                            <h1>Who's Going ?</h1>
                            <p>
                                Trip to Ubud, Bali, Indonesia
                            </p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="frontend/images/avatar1.png" height="60">
                                            </td>
                                            <td class="align-middle">
                                                Sherina Fibri Indria
                                            </td>
                                            <td class="align-middle">
                                                INA
                                            </td>
                                            <td class="align-middle">
                                                N/A
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="frontend/images/ic_remove@2x.png" alt="ic_remove" height="18">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="frontend/images/avatar2.png" height="60">
                                            </td>
                                            <td class="align-middle">
                                                Fernando Meloni
                                            </td>
                                            <td class="align-middle">
                                                KOR
                                            </td>
                                            <td class="align-middle">
                                                30 Days
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="frontend/images/ic_remove@2x.png" alt="ic_remove" height="18">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <lable for="inputUsername" class="sr-only">Name</lable>
                                    <input type="text" class="form-control mb-2 mr-sm-2" name="inputUsername"
                                        id="inputUsername" placeholder="Username" />
                                    <lable for="inputVisa" class="sr-only">Visa</lable>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                    <label for="doePassport" class="sr-only">DOE Password</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport"
                                            placeholder="DOE Password">
                                    </div>
                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>
                                <h3 class="mt-3 mb-0">Note</h3>
                                <p class="disclaimer mb-0">You are only able to invite member that has registered in
                                    Nomads.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>
                                Checkout Information
                            </h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">
                                        2 Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50%" class="text-right">
                                        $ 190,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                        $ 80,00 / person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                        $ 280,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique Code)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-biru">$ 279,</span><span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>
                                Payment Instruction
                            </h2>
                            <p class="payment-instructions">
                                Please complete your payment before to
                                continue the wonderful trip
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>
                                            PT Nomads ID
                                        </h3>
                                        <p>
                                            0881 8829 8800
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>
                                            PT Nomads ID
                                        </h3>
                                        <p>
                                            0881 8829 8800
                                            <br>
                                            Bank HSBC
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="cancel-container text-center">
                            <a href="{{ route('detail') }}" class="btn btn-block btn-cancel mt-3 py2">
                                Cancel Booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
    <script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });

            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="frontend/images/ic_doe.png" />'
                }
            });
        });
    </script>
@endpush

@push('prepend-style')
    <link rel="stylesheet" href="frontend/libraries/gijgo/css/gijgo.min.css">
@endpush

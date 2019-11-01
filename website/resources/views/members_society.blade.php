@extends('layouts.app')

@section('title',trans('app.title_members_society'))

@include('partials._about_society_style')

@section('content')
    @include('partials._breadcrumbs',['title' => trans('app.members_society')])
    <div class="main-wrapper">
        <main class="main-container pb-50 pt-70">
            <section>
                <div class="container">
                    <div class="brk-tables brk-tables-strict font__family-montserrat brk-form-strict" data-brk-library="component__tables,datatables_js">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th class="active" scope="col">Company <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">Order Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">Product <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">Amount <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th scope="col">Total <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lycos</td>
                                    <td>12/05/2015</td>
                                    <td>Product Six</td>
                                    <td>7</td>
                                    <td>$585.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Lycos</td>
                                    <td>12/05/2015</td>
                                    <td>Product Six</td>
                                    <td>7</td>
                                    <td>$585.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lycos</td>
                                    <td>12/05/2015</td>
                                    <td>Product Six</td>
                                    <td>7</td>
                                    <td>$585.00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Lycos</td>
                                    <td>12/05/2015</td>
                                    <td>Product Six</td>
                                    <td>7</td>
                                    <td>$585.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Lycos</td>
                                    <td>12/05/2015</td>
                                    <td>Product Six</td>
                                    <td>7</td>
                                    <td>$585.00</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Lycos</td>
                                    <td>12/05/2015</td>
                                    <td>Product Six</td>
                                    <td>7</td>
                                    <td>$585.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection

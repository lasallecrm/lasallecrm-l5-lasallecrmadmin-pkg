@extends('lasallecmsadmin::bob1.layouts.default')



@section('content')

    <!-- Start: Main content -->
    <section class="content">


        <div class="container">

            <br /><br />
            <div class="row">
                <h1>
                <span class="label label-info">
                    Customer Management: Address Types
                </span>
                </h1>
                <br /><br />
            </div>


            @include('lasallecmsadmin::bob1.partials.message')


            @if (count($addresstypes))

                <a class="btn btn-default pull-right" href="{{ route('admin.luaddresses.create') }}" role="button">
                    <span class="glyphicon glyphicon-heart-empty"></span>  Create Address Type
                </a>
                <br /><br /><br />


                {{-- bootstrap table tutorial http://twitterbootstrap.org/twitter-bootstrap-table-example-tutorial --}}

                {{-- http://datatables.net/manual/options --}}

                <table id="table_id" class="table table-striped table-bordered table-hover" data-order='[[ 1, "asc" ]]' data-page-length='25'>
                    <thead>
                    <tr class="info">
                        <th style="text-align: center;">ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="text-align: center;">Enabled</th>
                        <th></th>
                        <th></th>
                    </tr>

                    </thead>

                    <tbody>
                    @foreach ($addresstypes as $addresstype)
                        <tr>
                            <td align="center">{{{ $addresstype->id }}}</td>

                            <td>{{{ $addresstype->title }}}</td>

                            <td>{{{ $addresstype->description }}}</td>

                            <td align="center"> {!! $HTMLHelper::convertToCheckOrXBootstrapButtons($addresstype->enabled) !!}</td>

                            <td align="center">
                                <a href="{{{ URL::route('admin.luaddresses.edit', $addresstype->id) }}}" class="btn btn-success  btn-xs" role="button">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                            </td>
                            <td align="center">

                                {{-- If there is just one address type, then suppress the delete button --}}
                                @if (count($addresstypes) > 1)

                                    {!! Form::open(array('url' => 'admin/luaddresses/' . $addresstype->id)) !!}
                                    {!! Form::model($addresstype, array('route' => array('admin.luaddresses.destroy', $addresstype->id), 'method' => 'DELETE')) !!}

                                    <button type="submit" class="btn btn-danger btn-xs" data-confirm="Do you really want to DELETE the {!! strtoupper($addresstype->title) !!} address type?">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>

                                    {!! Form::close() !!}
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @else
                There are no address types. Go ahead, create your first address type!

                <br /><br />

                <a class="btn btn-default" href="{{ route('admin.luaddresses.create') }}" role="button">
                    <span class="glyphicon glyphicon-heart-empty"></span>  Create Address Type
                </a>
            @endif

        </div> <!-- container -->

        </div> <!-- content -->
        <!-- End: Main content -->

    </section>


@stop
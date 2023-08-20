@extends('layouts.backend.master')

@section('title')
{{trans('categories.title')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{trans('categories.title')}} </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">{{trans('categories.Home')}}</a></li>
                    <li class="breadcrumb-item active">Page Title</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div>
                        <div class="col mb-3">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addcategorie">{{trans('categories.addcategorie')}}</button>
                            @include('backend.categories.modal_create')

                        </div>
                    </div>

                    <table id="datatable" class="table table-striped table-bordered p-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{trans('categories.Categorie Name')}}</th>
                            <th>{{trans('categories.Notes')}}</th>
                            <th>{{trans('categories.Operations')}}</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $categorie)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$categorie->name}}</td>
                            <td>{{$categorie->notes == true ? $categorie->notes : trans('categories.cat_note')}}</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal"  data-placement="top"  title="Edit" data-target="#Editcategorie{{$categorie->id}}"> {{trans('categories.edit')}}<i class="fa fa-edit"></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-placement="top" title="Delete" data-target="#Deletecategorie{{$categorie->id}}"><i class="fa fa-trash">{{trans('categories.delete')}}</i></button>
                                    </li>
                                </ul>
                            </td>

                        </tr>
                        @include('backend.categories.modal_update')
                        @include('backend.categories.modal_delete')
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>



@endsection



@section('js')

@endsection

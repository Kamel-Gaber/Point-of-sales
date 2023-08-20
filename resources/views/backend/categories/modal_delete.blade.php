{{-- <div class="modal fade" id="Deletecategorie{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">{{trans('categories.addcategorie')}}</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form action="{{route('categories.destroy' , 'test' )}}" method="post" autocomplete="off">--}}
{{--                    @method('DELETE')--}}
{{--                    @csrf--}}
{{--                    <div class="row">--}}
{{--                        <input type="hidden" name="id" value="{{$categorie->id}}">--}}
{{--                        <div class = "col">--}}
{{--                            <label>{{trans('categories.cateogriear')}}</label>--}}
{{--                            <input type="text" name="name_ar" class="form-control" id="cateogriear-name" VALUE="{{$categorie->getTranslation('name','ar')}}">--}}
{{--                        </div>--}}

{{--                      <div class = "col">--}}
{{--                      <label>{{trans('categories.cateogrieen')}}</label>--}}
{{--                        <input type="text" name="name_en" class="form-control" id="cateogrieen-name" value="{{$categorie->getTranslation('name', 'en')}}">--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div class="row">--}}

{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <label >{{trans('categories.Notes')}}</label>--}}
{{--                        <textarea class="form-control" name="notes">{{$categorie->notes}}</textarea>--}}
{{--                    </div>--}}

{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('categories.Close')}}</button>--}}
{{--                        <button type="submit" class="btn btn-primary">{{trans('categories.Save')}}</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Button trigger modal -->

<!-- Modal delete-->
<div class="modal fade" id="Deletecategorie{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('categories.destroy' , 'test' )}}" method="post" autocomplete="off">
                                    @method('DELETE')
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{$categorie->id}}">
                                    </div>
                                    <br>
                                    <div class="col">
                                        <label >{{trans('categories.confirm_delete')}}</label>

                                    </div>
                    <div class="col">

                        <label >{{$categorie->name}}</label>
                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('categories.Close')}}</button>
                                        <button type="submit" class="btn btn-danger">{{trans('categories.delete')}}</button>
                                    </div>
                                </form>
            </div>
        </div>
    </div>
</div>

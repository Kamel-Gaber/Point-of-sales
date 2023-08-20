{{--<!-- Modal -->--}}
{{--<div class="modal fade" id="addcategorie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">{{trans('categories.addcategorie')}}</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                ...--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="modal fade" id="addcategorie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('categories.addcategorie')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('categories.store')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class = "col">
                            <label>{{trans('categories.cateogriear')}}</label>
                            <input type="text" name="name_ar" class="form-control" id="cateogriear-name">
                        </div>

                      <div class = "col">
                      <label>{{trans('categories.cateogrieen')}}</label>
                        <input type="text" name="name_en" class="form-control" id="cateogrieen-name">
                      </div>
                    </div>
                    <br>
                    <div class="row">

                    </div>
                    <div class="col">
                        <label >{{trans('categories.Notes')}}</label>
                        <textarea class="form-control" name="notes"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('categories.Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{trans('categories.Save')}}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

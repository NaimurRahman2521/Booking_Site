<!-- Modal -->
<div class="modal fade" id="addLocationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="categoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryLabel">Add Location Form</h5>
                <button type="button" class="fa fa-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('location.new')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body mx-4">
                    <!--@csrf-->
                    <div class="row mb-4">
                        <label for="categoryName" class="col-md-4 form-label">Location Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" required name="name" id="inputEmail3"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="description" class="col-md-4 form-label">Description</label>
                        <div class="col-md-8">
                            <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <input type="file" name="image" class="dropify" data-height="100" accept="image/*"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="active" class="col-md-4">Select Status</label>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="rdiobox" for="publish">
                                        <input name="status" class="radio-primary" type="radio" id="publish" value="1" checked>
                                        <span>Publish</span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="rdiobox" for="unpublish">
                                        <input name="status" class="radio-danger" type="radio" id="unpublish" value="0">
                                        <span>Unpublish</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add New Location</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- MODAL END -->

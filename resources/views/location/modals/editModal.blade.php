<!-- Modal -->
<div class="modal fade" id="editLocationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="categoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryLabel">Update Location Form</h5>
                <button type="button" class="fa fa-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('location.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body mx-4">
                    <!--@csrf-->
                    <div class="row mb-4">
                        <label for="categoryName" class="col-md-4 form-label">Location Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="editLocationName" name="name" />
                            <input type="hidden" name="id" id="editLocationId"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="description" class="col-md-4 form-label">Description</label>
                        <div class="col-md-8">
                            <textarea name="description" id="editLocationDescription" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <input type="file" name="image" class="dropify" data-height="50" accept="image/*"/>
                            <img src="" alt="" id="editLocationImage" height="100" width="130"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="active" class="col-md-4">Publication Status</label>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="rdiobox" for="statusPublished">
                                        <input name="status" class="radio-primary" type="radio" id="statusPublished" value="1">
                                        <span>Published</span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="rdiobox" for="statusUnpublished">
                                        <input name="status" class="radio-danger" type="radio" id="statusUnpublished" value="0">
                                        <span>Unpublished</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Location</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- MODAL END -->

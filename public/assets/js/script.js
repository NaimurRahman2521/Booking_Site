//============================location edit
$(document).on('click', '.location-edit-btn', function () {
    var id = $(this).attr('data-id');
    $.ajax({
        type: "GET",
        url: baseURL+"/location/edit/",
        data:{id: id},
        dataType: "JSON",
        success: function (response) {
            $('#editLocationName').val(response.name);
            $('#editLocationId').val(response.id);
            $('#editLocationDescription').text(response.description);
            $('#editLocationImage').attr('src', response.image);
            if(response.status == 1)
            {
                $('#statusPublished').prop('checked', 'true');
            }
            else
            {
                $('#statusUnpublished').prop('checked', 'true');
            }
            $('#editLocationModal').modal('show');
        }
    });
});

//=================================================apartment edit
$(document).on('click', '.apartment-edit-btn', function () {
    var id = $(this).attr('data-id');
    $.ajax({
        type: "GET",
        url: baseURL+"/apartment/edit/",
        data:{id: id},
        dataType: "JSON",
        success: function (response) {
            $('#editApartmentTitle').val(response.apartment.title);
            $('#editApartmentId').val(response.apartment.id);
            $('#editApartmentDescription').text(response.apartment.description);
            $('#editApartmentAdult').val(response.apartment.total_adult);
            $('#editApartmentChild').val(response.apartment.total_child);
            $('#editApartmentImage').attr('src', response.apartment.image);

            for (var location of response.locations) {
                // console.log(category.id);
                if (response.apartment.location_id == location.id)
                {
                    // alert('Done');
                    // $('#categoryName').prop('checked', 'true');
                    $('#locationName'+location.id).prop('selected','true');
                }
            }

            if(response.apartment.book_status == 1)
            {
                $('#statusBooked').prop('checked', 'true');
            }
            else
            {
                $('#statusAvailable').prop('checked', 'true');
            }


            if(response.apartment.status == 1)
            {
                $('#statusPublished').prop('checked', 'true');
            }
            else
            {
                $('#statusUnpublished').prop('checked', 'true');
            }


        }

    });
    $('#editApartmentModal').modal('show');
});

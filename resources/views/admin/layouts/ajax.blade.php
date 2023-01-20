<script>
    $(document).ready(function() {
        $('#department').on('change', function() {
            let id = $(this).val();
            $('#doctorName').empty();
            $('#doctorName').append(`<option value="0" disabled selected>Processing...</option>`);
            $.ajax({
                type: 'GET',
                url: 'my-doctor/' + id,
                success: function(response) {
                    var response = JSON.parse(response);
                    $('#doctorName').empty();
                    $('#doctorName').append(
                        `<option value="0" disabled selected>Select your Doctor</option>`
                    );
                    response.forEach(element => {
                        $('#doctorName').append(
                            `<option value="${element['id']}">${element['name']}</option>`
                        );
                    });
                }
            });
        });
    });
</script>

{{-- custom script --}}
<script>
    $("#addMoreService").on("click", function(event) {
        event.preventDefault();
        $("#inputFields").append(
            '<div class="form-group col-md-6"> <label>Service Name</label> <input type="text" placeholder="Service Name" class="form-control" name="service[]"> </div> <div class="form-group col-md-6"> <label>Cost of Treatment</label> <input type="text" placeholder="Cost of Treatment" class="form-control" name="cost[]"> </div>'
            );
    });
</script>

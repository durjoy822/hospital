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
@section('js')

    <script>
        $(document).ready(function() {
            $("#datepicker").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
            });
        });


        $(document).on('change', '#skpd', function() {
            var id_skpd = $(this).val();
            $.ajax({
                type: "GET",
                url: 'http://localhost:8000/api/v1/kuisioner-smart-city/' + id_skpd,
                
                success: function(data) {   
                    console.log(data);                 
                    $(".kuisioner").html(
                        '<option selected disabled="true" value="0">=== Silahkan Pilih === </option>'
                    );
                    $.each(data, function(index, value) {
                        $(".kuisioner").append( "<option value=' " + value.id + " '> " + value.kuisioner + "</option>" );
                    });
                },
                error: function() {}
            });

        });
    </script>

@stop

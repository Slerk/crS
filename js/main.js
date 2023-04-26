    $(function () {

        $('.cart').on('click',function (e){
            e.preventDefault();
            // var idS =  parseInt($(this).data('idS'));
            // let id = $(this).data('idS');

            var id = $ ('#id').val();

            $.ajax({

                url: 'cart.php',
                type:'GET',
                data:{cart:'add',id:id},
                dataType:'json',
                success: function (res){
                    console.log(res);
                },
                error:function (){
                    alert('Error');
                }


            });

        });

    });
<script>
    $(document).ready(function() {
        var className = '{{ $className }}';
        var element = $('.' + className);
        element.on('click', function(e){
            e.preventDefault();
            const swalWithBootstrapButton = Swal.mixin({
                customClass : {
                    confirmButton : 'btn btn-success mx-2',
                    cancelButton: 'bt btn-danger mx-2'
                },
                buttonsStyling: false
            });
            swalWithBootstrapButton.fire({
                title: 'آیا از حذف کردن مطمین هستید',
                text: 'شما می توانید درخواست خود را لغو کنید',
                icon: 'warning',
                showCancelButton : true,
                cancelButtonText: 'خیر درخواست لغو شود',
                confirmButtonText : 'بله داده حذف شود',
                reverseButtons: true }).then((result)=>{
                    if(result.value==true){
                        $(this).parent().submit();
                    }else if(result.dismiss === Swal.DismissReason.cancel){
                        swalWithBootstrapButton.fire({
                            title : 'لغو درخواست',
                            text: 'درخواست شما لغو شد',
                            icon: 'error',
                            confirmButtonText: 'باشه',

                        })
                    }
                })
        });
    })
</script>

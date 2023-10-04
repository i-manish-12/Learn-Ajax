<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<a href="javascript:void(0)" onclick="click_here()">Click Here </a>

<script>
    function click_here()
    {
        jQuery.ajax({
            url: 'get.php',
            type: 'post',
            success: function(result){
                alert(result);
            }
        })
    }
</script>
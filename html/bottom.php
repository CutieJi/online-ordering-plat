    
<script>
  
    let alert = document.getElementById('alert_box');

        setTimeout(() => {
            alert.style.opacity = '0';
            alert(2);
        }, 3000);



    // may error
    let shopName = document.getElementById('shop_name');

    console.log(shopName.innerHTML.length)

    if(shopName.innerHTML.length >= 8)
    {
       shopName.style.fontSize = '1.8em';
    } 

</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<script>
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
        }
    }

    xhr.open('GET', 'latihan3.json', true);
    xhr.send();
</script>
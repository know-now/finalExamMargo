<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Candies</title>
</head>

<body>
    <h2>Insert a new candy</h2>

<!-- Candy form -->

    <form method="post">
        <input type="text" name="name" placeholder="Name of the candy"> <br>
        <input type="text" name="price" placeholder="Price of the candy"> <br>
        <!-- <input type="text" name="category" placeholder="Category of the candy"> -->

        <label for="categ_id">Choose a category:</label>

        <select name="categ_id" id="categ_id">
            <option value="1">Gummies</option>
            <option value="2">Lollipops</option>
            <option value="3">Caramel</option>
        </select>

        <input type="submit" name="submitBtn" value="Insert" id="submitBtn">
    </form>
    <div id="result"></div>

<!-- Fetching the data -->

    <script>
        document.querySelector("form").addEventListener('submit', function(event) {
            event.preventDefault();
            let form = this;
            fetch('addcandies.php', {
                    method: "POST",
                    body: new FormData(form)
                }).then(res => res.text())
                .then(function(result) {
                    console.log(result);
                    document.getElementById('result').innerHTML = result;
                });
        });
    </script>

</body>

</html>
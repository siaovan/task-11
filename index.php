<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            color: #2196F3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Data Table</h2>

<table>
    <tr>
        <th>Position</th>
        <th>URL</th>
        <th>Title</th>
        <th>Description</th>
    </tr>

    <?php
    $data = [
        [
            "position" => 1,
            "url" => "https://www.nike.com/",
            "title" => "Nike. Just Do It. Nike.com",
            "description" => "Nike delivers innovative products, experiences and services to inspire athletes."
        ],
        [
            "position" => 2,
            "url" => "https://www.instagram.com/nike/?hl=de",
            "title" => "Nike (@nike) • Instagram photos and videos",
            "description" => "255m Followers, 147 Following, 1019 Posts - See Instagram photos and videos from Nike (@nike)"
        ],
        [
            "position" => 3,
            "url" => "https://twitter.com/nike",
            "title" => "Nike - Twitter",
            "description" => "Welcome to Nike FC. We're not a club. We're a community. If you love the game of football, you're a part of Nike FC. Let's change the game, ..."
        ],
        [
            "position" => 4,
            "url" => "https://en.wikipedia.org/wiki/Nike,_Inc.",
            "title" => "Nike, Inc. - Wikipedia",
            "description" => "Nike, Inc is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, ..."
        ],
        [
            "position" => 5,
            "url" => "https://www.youtube.com/user/nike",
            "title" => "Nike - YouTube",
            "description" => "We will continue to stand up for equality and work to break down barriers for athletes* all over the world. We will do and invest more to uphold ..."
        ],
        [
            "position" => 6,
            "url" => "https://www.footlocker.com/category/brands/nike.html",
            "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
            "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
        ]
    ];

    foreach ($data as $item) {
        echo "<tr>";
        echo "<td>" . $item['position'] . "</td>";
        echo "<td><a href='" . $item['url'] . "' target='_blank'>" . $item['url'] . "</a></td>";
        echo "<td>" . $item['title'] . "</td>";
        echo "<td>" . $item['description'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>

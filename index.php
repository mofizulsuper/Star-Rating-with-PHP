<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Developer Rating</title>
    <style>
        .rating-group {
            display: flex;
            direction: row-reverse;
            justify-content: start;
        }

        .rating-group input {
            display: none;
        }

        .rating-group label {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
        }

        .rating-group input:checked~label,
        .rating-group label:hover,
        .rating-group label:hover~label {
            color: gold;
        }

        .rating-section {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form action="save_rating.php" method="POST">
        <input type="hidden" name="developer_id" value="1"> <!-- Set developer ID -->

        <!-- Deadline Rating -->
        <div class="rating-section">
            <p>Deadline:</p>
            <div class="rating-group">
                <input type="radio" id="deadline-5" name="deadline" value="5"><label for="deadline-5">★</label>
                <input type="radio" id="deadline-4" name="deadline" value="4"><label for="deadline-4">★</label>
                <input type="radio" id="deadline-3" name="deadline" value="3"><label for="deadline-3">★</label>
                <input type="radio" id="deadline-2" name="deadline" value="2"><label for="deadline-2">★</label>
                <input type="radio" id="deadline-1" name="deadline" value="1"><label for="deadline-1">★</label>
            </div>
        </div>

        <!-- Quality Rating -->
        <div class="rating-section">
            <p>Quality:</p>
            <div class="rating-group">
                <input type="radio" id="quality-5" name="quality" value="5"><label for="quality-5">★</label>
                <input type="radio" id="quality-4" name="quality" value="4"><label for="quality-4">★</label>
                <input type="radio" id="quality-3" name="quality" value="3"><label for="quality-3">★</label>
                <input type="radio" id="quality-2" name="quality" value="2"><label for="quality-2">★</label>
                <input type="radio" id="quality-1" name="quality" value="1"><label for="quality-1">★</label>
            </div>
        </div>

        <!-- Communication Rating -->
        <div class="rating-section">
            <p>Communication:</p>
            <div class="rating-group">
                <input type="radio" id="communication-5" name="communication" value="5"><label for="communication-5">★</label>
                <input type="radio" id="communication-4" name="communication" value="4"><label for="communication-4">★</label>
                <input type="radio" id="communication-3" name="communication" value="3"><label for="communication-3">★</label>
                <input type="radio" id="communication-2" name="communication" value="2"><label for="communication-2">★</label>
                <input type="radio" id="communication-1" name="communication" value="1"><label for="communication-1">★</label>
            </div>
        </div>

        <button type="submit">Submit Rating</button>
    </form>
</body>

</html>
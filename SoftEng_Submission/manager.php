<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Portal</title>
    <link rel="stylesheet" href="managerstyles.css">
</head>

<body style="background-color:#939390">

    <h1 style="text-align: center;">List of products:</h1>

    <div class="table">
        <table class="table">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Stock Level</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>
                    <img src="images/chicken_biryani.jpg" alt="Chicken Biryani" width="100">
                </td>
                <td class = "Name">Chicken Biryani</td>
                <td class="stock-level">1</td>
                <td class="description">A flavorful rice dish with chicken and spices.</td>
                <td>
                    <button onclick="showEditForm(this)">Edit</button>
                    <button onclick="handleFileUpload(this)">Upload</button>
                    <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
                         <input type="text" name="newName" placeholder="New name">
                        <input type="number" name="quantity" placeholder="New quantity">
                        <input type="text" name="description" placeholder="New description">
                        <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
                        <button type="submit">Save</button>
                    </form>
                </td>
            </tr>
            <tr>
              <td>
                  <img src="images/Pakora.jpg" alt="Chicken Biryani" width="100">
              </td>
              <td>Pakora</td>
              <td class="stock-level">3</td>
              <td class="description">A flavorful rice dish with chicken and spices.</td>
              <td>
                  <button onclick="showEditForm(this)">Edit</button>
                  <button onclick="handleFileUpload(this)">Upload</button>
                  <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
                      <input type="number" name="quantity" placeholder="New quantity">
                      <input type="text" name="description" placeholder="New description">
                      <input type="Name " name="Name" placeholder="New Name">
                      <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
                      <button type="submit">Save</button>
                  </form>
              </td>
          </tr>
          <tr>
            <td>
                <img src="images/Ackee_and_Saltfish.jpg" alt="Chicken Biryani" width="100">
            </td>
            <td>Ackee and Saltfish</td>
            <td class="stock-level">4</td>
            <td class="description">A flavorful rice dish with chicken and spices.</td>
            <td>
                <button onclick="showEditForm(this)">Edit</button>
                <button onclick="handleFileUpload(this)">Upload</button>
                <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
                    <input type="number" name="quantity" placeholder="New quantity">
                    <input type="text" name="description" placeholder="New description">
                    <input type="Name " name="Name" placeholder="New Name">
                    <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
                    <button type="submit">Save</button>
                </form>
            </td>
        </tr>
        <tr>
          <td>
              <img src="images/Dim_Sum.jpg" alt="Chicken Biryani" width="100">
          </td>
          <td>Dim sum</td>
          <td class="stock-level">5</td>
          <td class="description">A flavorful rice dish with chicken and spices.</td>
          <td>
              <button onclick="showEditForm(this)">Edit</button>
              <button onclick="handleFileUpload(this)">Upload</button>
              <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
                  <input type="number" name="quantity" placeholder="New quantity">
                  <input type="text" name="description" placeholder="New description">
                  <input type="Name " name="Name" placeholder="New Name">
                  <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
                  <button type="submit">Save</button>
              </form>
          </td>
      </tr>
      <tr>
        <td>
            <img src="images/Dumplings.jpg" alt="Chicken Biryani" width="100">
        </td>
        <td>Dumplings</td>
        <td class="stock-level">1</td>
        <td class="description">A flavorful rice dish with chicken and spices.</td>
        <td>
            <button onclick="showEditForm(this)">Edit</button>
            <button onclick="handleFileUpload(this)">Upload</button>
            <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
                <input type="number" name="quantity" placeholder="New quantity">
                <input type="Name " name="Name" placeholder="New Name">
                <input type="text" name="description" placeholder="New description">
                <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
                <button type="submit">Save</button>
            </form>
        </td>
    </tr>
    <tr>
      <td>
          <img src="images/Dhokla.jpg" alt="Chicken Biryani" width="100">
      </td>
      <td>Dhokla</td>
      <td class="stock-level">7</td>
      <td class="description">A flavorful rice dish with chicken and spices.</td>
      <td>
          <button onclick="showEditForm(this)">Edit</button>
          <button onclick="handleFileUpload(this)">Upload</button>
          <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
              <input type="number" name="quantity" placeholder="New quantity">
              <input type="Name " name="Name" placeholder="New Name">
              <input type="text" name="description" placeholder="New description">
              <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
              <button type="submit">Save</button>
          </form>
      </td>
  </tr>
  <tr>
    <td>
        <img src="images/Fish_and_chips.jpg" alt="Chicken Biryani" width="100">
    </td>
    <td>Fish and chips</td>
    <td class="stock-level">3</td>
    <td class="description">A flavorful rice dish with chicken and spices.</td>
    <td>
        <button onclick="showEditForm(this)">Edit</button>
        <button onclick="handleFileUpload(this)">Upload</button>
        <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
            <input type="number" name="quantity" placeholder="New quantity">
            <input type="Name " name="Name" placeholder="New Name">
            <input type="text" name="description" placeholder="New description">
            <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
            <button type="submit">Save</button>
        </form>
    </td>
</tr>
<tr>
  <td>
      <img src="images/Cornish_pasty.jpg" alt="Chicken Biryani" width="100">
  </td>
  <td>Cornish Pasty</td>
  <td class="stock-level">1</td>
  <td class="description">A flavorful rice dish with chicken and spices.</td>
  <td>
      <button onclick="showEditForm(this)">Edit</button>
      <button onclick="handleFileUpload(this)">Upload</button>
      <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
          <input type="number" name="quantity" placeholder="New quantity">
          <input type="text" name="description" placeholder="New description">
          <input type="Name " name="Name" placeholder="New Name">
          <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
          <button type="submit">Save</button>
      </form>
  </td>
</tr>
<tr>
  <td>
      <img src="images/Chow_Mein.jpg" alt="Chicken Biryani" width="100">
  </td>
  <td>Chow Mein</td>
  <button class="edit-btn" onclick="showEditForm(this)">Edit</button>
  <button>Delete</button>
  <td></td>
  <td class="stock-level">5</td>
  <td class="description">A flavorful rice dish with chicken and spices.</td>
  <td>
      <button onclick="showEditForm(this)">Edit</button>
      <button onclick="handleFileUpload(this)">Upload</button>
      <form class="edit-form" style="display: none;" onsubmit="updateData(event, this)">
          <input type="number" name="quantity" placeholder="New quantity">
          <input type="text" name="description" placeholder="New description">
          <input type="Name " name="Name" placeholder="New Name">
          <input type="file" name="file" accept="image/*" onchange="handleImageUpload(event)">
          <button type="submit">Save</button>
      </form>
  </td>
</tr>


           
        </table>
    </div>

    <div class="sidenav">
        <a href="">Stock Level</a>
        <a href="">Food Menu</a>
        <a href="">Home</a>
    </div>

    <script src="managerscripts.js"></script>
</body>

</html>

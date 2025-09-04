<div class="container">
  <form action="action_page.php">

    <label for="fname">Fornavn</label>
    <input type="text" id="fname" name="firstname" placeholder="Ditt navn">

    <label for="lname">etternavn</label>
    <input type="text" id="lname" name="lastname" placeholder="Ditt etternavn..">

    <label for="country">Ditt land</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="norway">Norge</option>
    </select>

    <label for="subject">Din melding.</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
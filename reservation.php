<?php
require_once('views/page_top.php');
?>
<form class="form-style-9">
    <ul>
        <li>
            <input type="text" name="field1" class="field-style field-split align-left" placeholder="Name" />
            <input type="email" name="field2" class="field-style field-split align-right" placeholder="Email" />

        </li>
        <li>
            <input type="text" name="field3" class="field-style field-split align-left" placeholder="Phone" />
            <input type="url" name="field4" class="field-style field-split align-right" placeholder="Website" />
        </li>

        <li>
            <input type="text" name="field3" class="field-style field-full align-none" placeholder="Subject" />
        </li>
        <li>
            <textarea name="field5" class="field-style" placeholder="Message"></textarea>
        </li>
        <li>
            <input type="submit" value="Send Message" />
        </li>
    </ul>
    <div class="input-group date">
        <p>Date: <input type="text" id="datepicker"><span><i class="glyphicon glyphicon-th"></i></span></p>
    </div>

</form>
<script src="script/main.js"></script>
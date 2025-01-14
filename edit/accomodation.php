<div class="section3">
    <table class="mb-3 border-light" style="margin-bottom: 2vh !important; color: black" >
        <th > Fixed charges</th>
        <tr>
            <td data-th="">Alumnus/Alumna </td>
            <td style="text-align: center; padding: 2vh;" data-th="Cost for Alumni">7000</td>
        </tr>
        <tr>
            <td data-th="">Accompanying Person(s) </td>
            <td style="text-align: center;" data-th="Cost for Alumni">4000</td>
        </tr>
    </table>
    <table class="mb-3 border-light" style="margin-bottom: 2vh !important; color: black">
        <tr><th> Accommodation charges</th></tr>
        <tr>
            <th> Guest House</th>
            <th style="text-align: center;">Cost per person(₹)</th>
        </tr>
        <tr>
            <td data-th="">Technology Guest House/ Alumni Guest House</td>
            <td style="text-align: center;" data-th="Cost for Alumni">2250</td>
            </tr>
        <!-- <tr>
            <td data-th="">VGH/ SAM</td>
            <td style="text-align: center;" data-th="Cost for Alumni">900</td>
        </tr> -->
    </table>
    <div class="form-group">
        <label for="marital">Marital Status</label>
        <input class="form-control" type="text" name="marital" id="marital" value = "<?php echo "$marital"?>" maxlength="10">
    </div>
    <div class="form-group">
        <label for="accompanyingNo" >Accompanying Person(s)<span style="color:red;">*</span></label>
        <input class="form-control" type="number" min="0" id="accompanyingNo" name="accompanyingNo" onchange="calc_cost()" value = "<?php echo "$accompaniments"?>" required>
        <small class = "text-muted">Kids below 13 years of age won't be charged. It's free of cost for them. Don't add them in the accompanying person(s) list</small>
    </div>
    <div class="form-group">
        <label for="employee">Are you a resident of IIT Kharagpur ? <span style="color:red;">*</span></label>
        <select  class="form-control form-select" type="list" onchange="calc_cost()"  list="employee" id="employee" name="employee" required>
            <option value=""></option> 
            <option value="1">Yes</option> 
            <option value="0">No</option> 
        </select>
    </div>
    <div class="form-group " id = "serials">
        <label for="serial">Employee ID <span style="color:red;">*</span></label>
        <input class="form-control" type="text" name="serial" id="serial" >
    </div>
    <div class="form-group" id = "ghouse">
        <label for="room">Guest House <span style="color:red;">*</span></label>
        <select  class="form-control form-select" type="list" onchange="calc_cost()"  list="room" id="room" name="room" value = "<?php echo "$gh"?>" required>
            <option value=""></option> 
            <option value="Technology Guest House/ Alumni Guest House">Technology Guest House/ Alumni Guest House</option> 
            <!-- <option value="VGH/ SAM">VGH/ SAM</option> -->
            <!--<option value="NA">Not Required</option>-->
        </select>
    </div>
    <div class="form-group">
        <input class="form-control" id="cost" name = "cost" type="text" value = "<?php echo "$cost"?>" readonly>
    </div>
    <div class="m-t-lg">
        <button class="btn btn--form" type = "button" id = "next" onclick="back1()">Back</button>
        <button class="btn btn--form" type = "button" id = "next" onclick="next2()">Next</button>
    </div>
</div>
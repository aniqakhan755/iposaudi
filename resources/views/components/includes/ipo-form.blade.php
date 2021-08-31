<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="">Company Name <span class="color-red">*</span></label>
            <input class="form-control" placeholder="Company Name" required type="text" name="company_name" value="{{old('company_name')}}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Market Type <span class="color-red">*</span></label>
            <select class="form-control" name="market_type" required>
                <option selected disabled>Select Market Type</option>
                <option value="Main Market">Main Market</option>
                <option value="Nomu - Parallel Market">Nomu - Parallel Market</option>
                <option value="Sukuk and Bond">Sukuk and Bond</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Instrument <span class="color-red">*</span></label>
            <select class="form-control" name="instrument" required>
                <option selected disabled>Select Instrument</option>
                    <option value="REITs">REITs</option>
                    <option value="CEFs">CEFs</option>
                    <option value="ETFs">ETFs</option>
                    <option value="Corporate Sukuk">Corporate Sukuk</option>
                    <option value="Government Debt Instrument">Government Debt Instrument</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Offering Size <span class="color-red">*</span></label>
            <input type="number" name="offering_size" class="form-control" step="1" min="1" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Offering Price <span class="color-red">*</span></label>
            <input type="number" name="offering_price" class="form-control" step="1" min="1" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Offering Date <span class="color-red">*</span></label>
            <input class="single-daterange form-control" name="offering_date" placeholder="Offering Date" type="text" value="01/08/2021">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Closing Date <span class="color-red">*</span></label>
            <input class="single-daterange form-control" name="closing_date" placeholder="Closing Date" type="text" value="01/09/2021">
        </div>
    </div>
</div>





<div class="form-buttons-w">
    <button class="btn btn-primary" type="submit"> Submit</button>
</div>

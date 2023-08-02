<div class="modal" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Campagin Mail</h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Campaign Name *</label>
                                <input type="text" class="form-control" id="campaignName">
                                <label class="form-label">Campaign Email Subject*</label>
                                <input type="text" class="form-control" id="campaignEmailSubject">
                                <label class="form-label">Campaign Email Content</label>
                                <textarea class="form-control" id="campaignEmailContent"></textarea>
                                <label class="form-label">Select Customers</label>
                                <select id="selectedCustomers" class="form-control" name="selectedCustomers[]" multiple>
                                    @foreach ($customers as $customer)
                                        <option value="{{$customer['id']}}">{{$customer['name']}} ( {{$customer['email']}} )</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                    aria-label="Close">Cancel</button>
                <button onclick="Save()" id="save-btn" class="btn btn-sm  btn-success">Send Email</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#selectedCustomers').multiselect();
    async function Save() {



        let campaignName = document.getElementById('campaignName').value;
        let campaignEmailSubject = document.getElementById('campaignEmailSubject').value;
        let campaignEmailContent = document.getElementById('campaignEmailContent').value;
        let selectedCustomers = $('select[multiple]').val();
       

        if (campaignName.length === 0) {
            errorToast("campaign Name Required !")
        } else if (campaignEmailSubject.length === 0) {
            errorToast("campaign Email Required !")
        } else if (campaignEmailContent.length === 0) {
            errorToast("Email Content Required !")
        } else {

            document.getElementById('modal-close').click();

            showLoader();
            let res = await axios.post("/create-campaign", {
                campaignName: campaignName,
                campaignEmailSubject: campaignEmailSubject,
                campaignEmailContent: campaignEmailContent,
                selectedCustomers: selectedCustomers
            })
            hideLoader();

            if (res.status === 201) {

                successToast('Request completed');

                document.getElementById("save-form").reset();

                await getList();
            } else {
                errorToast("Request fail !")
            }
        }
    }
</script>

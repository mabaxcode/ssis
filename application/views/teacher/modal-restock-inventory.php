<div class="modal-dialog modal-dialog-centered mw-750px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="complete_staff_regis_data_stock">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Process restock inventory</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<i class="ki-outline ki-cross fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								
								<!--end::Input group-->
								<!--begin::Input group-->
								
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class=" fs-5 fw-semibold mb-2">Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="" name="name" disabled value="<?=$inventory['name']?>" />
									<!--end::Input-->
								</div>
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class=" fs-5 fw-semibold mb-2">Category</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="" name="email" disabled value="<?=$inventory['category']?>" />
									<!--end::Input-->
								</div>
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Restock Amount</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" type="number" placeholder="" name="restock_amount" />
									<!--end::Input-->
								</div>
								
								
								<!--end::Input group-->

								<input type="hidden" name="id" value="<?=$inventory['id']?>">
								
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<a class="btn btn-primary btn-process-stock">
								<span class="indicator-label">Restock</span>
							</a>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
			</div>



<script type="text/javascript">
	$( document ).ready(function() {

        completeStaffRegisStock('complete_staff_regis_data_stock');

    });
</script>
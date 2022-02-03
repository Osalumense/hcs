<a href="javascript:void(0)" id="" class="h-5 w-5 text-blue-700 mx-2 prod_details"><i class="bx bxs-info-circle bx-sm"></i></a>
{{-- {{url('/admin/counsellor/edit/' . Hashids::encode($user->id))}} --}}
<a href="#" class="h-5 w-5 text-blue-700 mx-2 admin_edit"><i class="bx bxs-edit bx-sm"></i></a>

{{-- {{url('/admin/counsellor/delete/' . Hashids::encode($user->id))}} --}}
<form action="" class="inline-block" method="POST">
    @csrf
    <button type="submit" class="h-5 w-5 text-red-700 mx-2 admin_delete"><i class="bx bx-trash bx-sm" onclick="return confirm('{{"Are you sure you want to delete this User??"}}')"></i></button>
</form>
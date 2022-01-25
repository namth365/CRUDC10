
<div class="">
<h1 class="">Danh Sách Học Viên C10</h1>
<table>
<thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col">Giới Tính</th>
            <th scope="col" style="width: 100px;">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $key => $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->ten }}</td>
            <td>{{ $customer->ngaysinh }}</td>
            <td>{{ $customer->gioitinh }}</td>
            <td>
                <a href="{{route('customers.edit',[$customer->id])}}" class="btn btn-primary ">Edit</a>
            </td>
            <td>
                <form action="{{route('customers.destroy',[$customer->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Xóa học viên {{ $customer->ten }} không?');"
                        class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
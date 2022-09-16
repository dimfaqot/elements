$poster = $this->request->getFile('poster');
$randomname = 'poster.jpg';

if ($poster->getError() == 0) {
$randomname = $poster->getRandomName();

$size = (int)str_replace(".", "", $poster->getSizeByUnit('mb'));

if ($size > 2000) {
session()->setFlashdata('gagal', 'Gagal!. Ukuran maksimal file 2MB.');
return redirect()->to(base_url('dashboard/artikel'));
}

$ext = ['jpg', 'jpeg', 'png'];
$exp = explode(".", $poster->getName());
$exe = strtolower(end($exp));
if (array_search($exe, $ext) === false) {
session()->setFlashdata('gagal', 'Gagal!. Format file harus ' . implode(", ", $ext) . '.');
return redirect()->to(base_url('dashboard/artikel'));
}

$poster->move('images/web/', $randomname);
}
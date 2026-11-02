<?php

namespace Tests\Feature;

use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MahasiswaTest extends TestCase
{
    use RefreshDatabase;

    private array $data = ['nim' => '220103001', 'nama' => 'Andi', 'alamat' => 'Surakarta', 'kelas' => 'TI22A3', 'hp' => '081200000001'];

    public function test_beranda_dan_daftar_terbuka(): void
    {
        $this->get('/')->assertOk();
        $this->get('/mahasiswa')->assertOk()->assertSee('Belum ada kartu');
    }

    public function test_tambah_lalu_tampil_sebagai_kartu(): void
    {
        $this->get('/insert')->assertOk();
        $this->post('/insert', $this->data)->assertRedirect('/mahasiswa');
        $this->get('/mahasiswa')->assertSee('Andi')->assertSee('Surakarta')->assertSee('081200000001');
    }

    public function test_ubah_data(): void
    {
        $this->post('/insert', $this->data);
        $this->get('/mahasiswa/update/220103001')->assertOk()->assertSee('Andi');
        $this->post('/mahasiswa/update/220103001', ['nama' => 'Budi', 'alamat' => 'Solo', 'kelas' => 'TI22B1', 'hp' => '0812'])->assertRedirect('/mahasiswa');
        $this->assertDatabaseHas('mahasiswa', ['nim' => '220103001', 'nama' => 'Budi']);
    }

    public function test_hapus_data(): void
    {
        $this->post('/insert', $this->data);
        $this->post('/mahasiswa/delete/220103001')->assertRedirect('/mahasiswa');
        $this->assertSame(0, Mahasiswa::count());
    }
}

<?php

namespace App\Exports;

use App\Models\Lelang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LelangExport implements FromCollection, WithHeadings
{
    private $date_start;
    private $date_finish;
    private $status;

    public function __construct($date_start, $date_finish, $status)
    {
        $this->date_start = $date_start;
        $this->date_finish = $date_finish;
        $this->status = $status;
    }
    public function collection()
    {
        $lelang = Lelang::join('barangs_15480', 'barangs_15480.id_15480', 'lelangs_15480.id_barang_15480')
            ->leftJoin('masyarakats_15480', 'masyarakats_15480.id_15480', 'lelangs_15480.id_masyarakat_15480')
            ->select('barangs_15480.nama_barang_15480 as nama_barang', 'lelangs_15480.tgl_lelang_15480', 'lelangs_15480.harga_akhir_15480', 'masyarakats_15480.nama_lengkap_15480 as nama_masyarakat', 'lelangs_15480.status_15480')
            ->whereDate('lelangs_15480.tgl_lelang_15480', '>=', $this->date_start)
            ->whereDate('lelangs_15480.tgl_lelang_15480', '<=', $this->date_finish);

        if ($this->status != 'semua') {
            $lelang = $lelang->where('status_15480', $this->status);
        }

        $lelang = $lelang->get();

        foreach ($lelang as $item) {
            if ($item->nama_masyarakat == null) {
                $item->nama_masyarakat = "Belum Ada Pemenang";
            }
            if ($item->harga_akhir_15480 == null) {
                $item->harga_akhir_15480 = "Belum Ada Penawaran";
            }
        }

        return $lelang;
    }

    public function headings(): array
    {
        return ["Nama Barang", "Tanggal Lelang", "Harga Akhir", "Nama Pemanang", "Status"];
    }
}

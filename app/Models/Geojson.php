<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geojson extends Model {
    use HasFactory;
    protected $table = 'geojson';
    protected $fillable = [
        'name',
        'href',
        'geojson_href',
        'geojson_text',
        'versi',
        'type',
        'tipe_lokasi',
        'nama_objek',
        'kabupaten',
        'kecamatan',
        'properties',
        'workspace',
        'subworkspace',
        'tanggal_data',
    ];
    public function workspace(){
        return $this -> belongsTo(workspace::class, 'workspace', 'nama');
    }
}
?>
    <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newpost extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'short_content',
        'content',
        'photo',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

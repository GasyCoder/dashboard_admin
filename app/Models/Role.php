<?php

namespace App\Models;

use App\Models\Traits\FilterScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes, FilterScope;

    private array $permissions = ['roles-create', 'roles-edit', 'roles-delete'];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    public function givePermission(string $permission): void
    {
        $permission = Permission::query()->firstOrCreate([
            'name' => $permission,
        ], [
            'name' => $permission,
            'label' => $permission,
            'description' => $permission,
        ]);

        $this->permissions()->attach($permission->id);
    }

    public function givePermissions(array $permissions): void
    {
        foreach ($permissions as $permission) {
            $this->givePermission($permission);
        }
    }

    public function revokePermission(string $permission): void
    {
        $permission = Permission::query()->firstOrCreate([
            'name' => $permission,
        ], [
            'name' => $permission,
            'label' => $permission,
            'description' => $permission,
        ]);

        $this->permissions()->detach($permission->id);
    }

    public function revokePermissions(array $permissions): void
    {
        foreach ($permissions as $permission) {
            $this->removePermission($permission);
        }
    }

    public function clearPermissions(): void
    {
        $this->permissions()->sync([]);
    }

    public function scopeSearch(Builder $query, ?string $search): void
    {
        $query->when($search, function (Builder $query) use ($search) {
            $query
                ->where('name', 'LIKE', "%{$search}%")
                ->orWhere('label', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%");
        });
    }
}

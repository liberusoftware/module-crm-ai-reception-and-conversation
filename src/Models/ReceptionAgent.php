<?php

declare(strict_types=1);

namespace Liberu\CRM\AIReceptionAndConversation\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property string $status
 * @property array<string,mixed>|null $knowledge
 * @property array<string,mixed>|null $tools
 */
final class ReceptionAgent extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_ai_reception_agents';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['knowledge' => 'array', 'tools' => 'array', 'policy' => 'array', 'requires_human_approval' => 'boolean'];
    }
}

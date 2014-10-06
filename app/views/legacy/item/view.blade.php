@extends('layouts.default')

@section('content')
<img class="legacy_item_bg" src="{{ Request::root().'/img/legacy/bgs/test1.png' }}" alt=""/>
<div class="row">
    <div class="large-12 columns">
        <div class="panel"><h1>{{ LegacyUtil::class_name($item->class) }}</h1></div>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-8 columns">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="panel">
                            <div class="row">
                                <!-- <div class="large-1 columns"><img src="{{ URL::asset('img/legacy/icon').'/'.$item->get_icon_name().'.png' }} " alt=""></div> -->
                                <div class="large-12 columns">
                                    <h1 class="text-center"><font color="{{ $item->quality_color() }}">{{ $item->name }}</font></h1>
                                    <p class="text-center"> {{ LegacyUtil::category_info($item->class, $item->subclass) }} </p>
                                    @if ($item->has_stat_info())
                                        <div class="row">
                                            <div class="large-4 medium-5 small-7 columns right">
                                                {{ $item->damage_info() }}
                                                {{ $item->armor_block_info() }}
                                            </div>
                                            <div class="large-8 medium-7 small-5 columns">
                                                {{ $item->stat_info() }}
                                                {{ $item->res_info() }}
                                                {{ $item->socket_info() }}
                                            </div>
                                        </div>
                                    @endif
                                    @if ($item->has_spell_info())
                                        <div class="row">
                                            <div class="large-12 columns">
                                                {{ $item->spell_info() }}
                                            </div>
                                        </div>
                                    @endif
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-12 columns">
                        <div class="panel"><h3>来源</h3>
                            @if (!$item->has_loot())
                                <p>此物品没有明确的来源信息，这可能是由其游戏背景设定所决定的。如果你希望为其添加获取方式介绍，请
                                @if (!Auth::check())
                                    <a href="#">登录</a>
                                @else
                                    <a href="#">点这里</a>
                                @endif
                                以进行编辑。</p>
                            @else
                                {{ $item->get_vendor_info() }}
                                {{ $item->get_creature_loot_info() }}
                                {{ $item->get_production_info() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-4 columns">
                <div class="panel"><h3>简介</h3>
                    <?php $desc = $item->find($item->entry)->player_desc; ?>
                    @if (!$desc)
                    <p>此物品还没有介绍内容。请
                        @if (!Auth::check())
                            <a href="#">登录</a>
                        @else
                            <a href="#">点这里</a>
                        @endif
                    来为此物品添加介绍。</p>
                    @else
                    <p> {{ $desc->brief }} </p>
                        @if ($desc->description)
                            <p>此简介有详细版本。{{ link_to_route('legacy_item_desc', '点击查看...', $item->entry) }} </p>
                        @else
                            <p>此简介没有关联的详细介绍条目。请<a href="#">登录</a>来进行编辑。</p>
                        @endif
                    @endif
                </div>
                <div class="panel"><h3>持有者</h3><p>目前还没有玩家获取这件物品。</p></div>
            </div>
        </div>
    </div>
</div>

@endsection

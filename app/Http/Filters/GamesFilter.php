<?php



namespace App\Http\Filters;
use App\Models\GameGenre;
use Illuminate\Database\Eloquent\Builder;


class GamesFilter extends AbstractFilter{

    public const TITLE = 'title';
    public const GAMESCORE = 'gameScore';
    public const LENGTH = 'length';
    public const RELEASEDATE = 'releaseDate';
    public const DEVELOPER_ID = 'developer_id';
    public const USER_ID = 'user_id';






	protected function getCallbacks(): array {
        return [self::TITLE=>[$this,'title'],
                self::GAMESCORE=>[$this,'gameScore'],
                self::LENGTH=>[$this,'length'],
                self::RELEASEDATE=>[$this,'releaseDate'],
                self::DEVELOPER_ID=>[$this,'developer_id'],
                self::USER_ID=>[$this,'user_id'],
    ];
	}

    public function apply(Builder $builder){
        $this->before($builder);
        foreach($this->getCallbacks() as $name=>$callback){
            if(isset($this->queryParams[$name])){
                $rangeFilters = ['gameScore','releaseDate','length'];
                if(in_array($name,$rangeFilters)){
                    $operator = $this->queryParams[$name . "Operator"] ?? '=';
                    call_user_func($callback,$builder, $this->queryParams[$name],$operator);
                }else{
                    call_user_func($callback,$builder, $this->queryParams[$name]);
                }
            }
        }
    }


    public function title(Builder $builder, $value){
        $builder->where('title','like',"%{$value}%");       
    }
    public function gameScore(Builder $builder, $value,$operator){
        $builder->where('gameScore',$operator,$value);        
    }
    public function length(Builder $builder, $value,$operator){
        $builder->where('length',$operator,$value);       
    }
    public function releaseDate(Builder $builder, $value,$operator){
        $builder->where('releaseDate',$operator,$value);        
    }
    public function developer_id(Builder $builder, $value){
        $builder->where('developer_id',$value);      
    }
    public function user_id(Builder $builder, $value){
        $builder->where('user_id',$value);      
    }

}
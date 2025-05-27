use Filament\Forms;
use Filament\Tables;
use App\Models\Student;
use App\Models\Major;
use App\Models\Semester;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Select::make('student_id')
                ->relationship('student', 'name')
                ->required(),

            Forms\Components\Select::make('major_id')
                ->relationship('major', 'name')
                ->required(),

            Forms\Components\Select::make('semester_id')
                ->relationship('semester', 'name')
                ->required(),

            Forms\Components\TextInput::make('amount')
                ->numeric()
                ->required(),

            Forms\Components\Select::make('payment_method')
                ->options([
                    'cash' => 'Cash',
                    'transfer' => 'Transfer',
                    'qris' => 'QRIS',
                ])
                ->required(),

            Forms\Components\DatePicker::make('payment_date')->required(),

            Forms\Components\Textarea::make('note')->rows(3),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('student.name')->label('Student'),
            Tables\Columns\TextColumn::make('major.name')->label('Major'),
            Tables\Columns\TextColumn::make('semester.name')->label('Semester'),
            Tables\Columns\TextColumn::make('amount')->money('IDR'),
            Tables\Columns\TextColumn::make('payment_method')->label('Method'),
            Tables\Columns\TextColumn::make('payment_date')->date(),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}

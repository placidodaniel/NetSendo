# Instruções de Tradução para Agentes

Este documento define o procedimento padrão para manipulação de traduções no projeto NetSendo. **Todos os Agentes devem seguir estas instruções.**

## 1. Fonte de Verdade

A aplicação frontend (Vue.js/Inertia) usa arquivos **JSON** para traduções.
**NÃO** dependa apenas dos arquivos de tradução PHP (`src/lang/*`) para texto do frontend, pois eles não são sincronizados automaticamente.

- **Localização**: `src/resources/js/locales/`
- **Arquivos**:
  - `pl.json` (Polonês - Nativo/Padrão)
  - `en.json` (Inglês)
  - `es.json` (Espanhol)
  - `de.json` (Alemão)
  - `pt_BR.json` (Português Brasileiro)

## 2. Idiomas Suportados

| Código | Idioma   | Função              |
| :----- | :------- | :------------------ |
| `pl`   | Polonês  | Fonte / Padrão      |
| `en`   | Inglês   | Secundário Primário |
| `es`   | Espanhol | Obrigatório        |
| `de`   | Alemão   | Obrigatório        |
| `pt_BR`| Português Brasileiro | Optional/Novo |

## 3. Fluxo de Trabalho para Adicionar Traduções

Ao adicionar novos recursos ou texto, siga este processo rigoroso:

### Passo 1: Adicionar à Fonte (PL & EN)

A melhor prática atual é adicionar manualmente as novas chaves em `pl.json` e `en.json`.
Garanta que a estrutura seja lógica e aninhada (ex: `crm.task.new` ao invés de apenas `new_task`).

```json
// Exemplo de adição em pl.json
"crm": {
    "task": {
        "new": "Nowe zadanie"
    }
}
```

### Passo 2: Traduzir para Idiomas Suportados (ES, DE, PT_BR)

Você **DEVE** traduzir as novas chaves para Espanhol (`es.json`), Alemão (`de.json`) e Português Brasileiro (`pt_BR.json`).
Não as deixe em inglês ou vazias.

### Passo 3: Implementação no Frontend

Use a função Vue I18n `$t`. Sempre forneça uma string padrão (geralmente Polonês) como segundo argumento para fallback/leitura durante o desenvolvimento.

```javascript
// Uso preferencial
$t("crm.task.new", "Nowe zadanie");
```

## 4. Verificação

Antes de completar uma tarefa:

1.  **Verificar Existência das Chaves**: Verifique que as novas chaves existem em **TODOS OS** arquivos JSON relevantes.
2.  **Verificar Sintaxe**: Garanta JSON válido (sem vírgulas à esquerda, chaves fechadas corretamente).
3.  **Verificação Visual**: Se possível, verifique se o texto aparece corretamente na interface.

## 5. Traduções de Backend (E-mails/API)

Para e-mails ou mensagens geradas pelo backend, use os arquivos PHP do Laravel em `src/lang/`.
_Obs: Se uma string for usada tanto no Frontend quanto no Backend, ela deve ser adicionada TANTO aos arquivos JSON quanto aos arquivos PHP._

## 6. Nota Importante sobre Locale

Ao usar `Intl.NumberFormat` ou `toLocaleString()`, sempre normalize o locale de `pt_BR` para `pt-BR` (hífen ao invés de underscore) para compatibilidade com a API Intl do JavaScript.

Exemplo de normalização:
```javascript
const normalizedLocale = locale.value.replace('_', '-');
new Intl.NumberFormat(normalizedLocale, { ... });
```
